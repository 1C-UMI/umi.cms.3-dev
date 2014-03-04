<?php
/**
 * UMI.Framework (http://umi-framework.ru/)
 *
 * @link      http://github.com/Umisoft/framework for the canonical source repository
 * @copyright Copyright (c) 2007-2013 Umisoft ltd. (http://umisoft.ru/)
 * @license   http://umi-framework.ru/license/bsd-3 BSD-3 License
 */
namespace umicms\project\module\search\highlight;

/**
 * Фрагмент поискового текста, состоящий из левой и правой частей и центральной, содержащей поисковое выражение.
 */
class Fragment
{
    /**
     * Массив слов с левой стороны от ключевой фразы
     * @var array $edgeLeft
     */
    private $edgeLeft;
    /**
     * Массив слов с правой стороны от ключевой фразы
     * @var array $edgeRight
     */
    private $edgeRight;
    /**
     * Ключевая фраза, является центром фрагмента
     * @var string $center
     */
    private $center;
    /**
     * Начальная позиция всего фрагмента в тексте
     * @var int $startPos
     */
    private $startPos;
    /**
     * Конечная позиция всего фрагмента в тексте
     * @var int $endPos
     */
    private $endPos;

    /**
     * Конструктор фрагмента.
     * @param string $keyword
     * @param array $wordsLeft
     * @param array $wordsRight
     * @param int $startPos
     * @param int $endPos
     */
    public function __construct($keyword, $wordsLeft, $wordsRight, $startPos, $endPos)
    {
        $this->edgeLeft = $wordsLeft;
        $this->edgeRight = $wordsRight;
        $this->center = $keyword;
        $this->startPos = $startPos;
        $this->endPos = $endPos;
    }

    /**
     * Перекрывается ли фрагмент с другим.
     * @param Fragment $fragmentNext
     * @param int $limit
     * @return bool
     */
    public function overlaps(Fragment $fragmentNext, $limit)
    {
        $cross = ($this->getEndPos() > $fragmentNext->getStartPos())
            && ($this->getStartPos() < $fragmentNext->getEndPos());
        if ($cross) {
            $edgePrev = $this->getEdgeRight();
            $edgeNext = $fragmentNext->getEdgeLeft();
            return count($this->intersectEdges($edgePrev, $edgeNext, $limit)) > 0;
        }
        return false;
    }

    /**
     * Возвращает {@see startPos}
     * @return int
     */
    public function getStartPos()
    {
        return $this->startPos;
    }

    /**
     * Возвращает {@see endPos}
     * @return int
     */
    public function getEndPos()
    {
        return $this->endPos;
    }

    /**
     * Возвращает {@see edgeLeft}
     * @return array
     */
    public function getEdgeLeft()
    {
        return $this->edgeLeft;
    }

    /**
     * @return mixed
     */
    public function getEdgeRight()
    {
        return $this->edgeRight;
    }

    /**
     * Возвращает {@see center}
     * @return string
     */
    public function getCenter()
    {
        return $this->center;
    }

    /**
     * Возвращает массив слов, попадающих в пересечение между двумя массивами слов — левый и правый.
     * Вычисляется попадание последних слов левого массива в пересечение с первыми словами правого.
     * При этом учитывается максимальный лимит (глубина) пересечения.
     * <code>
     * intersectEdges([a,b,c,d], [c,d,x,y,z], 2)
     * // вернет [c,d]
     * </code>
     *
     * @param array $left
     * @param array $right
     * @param int $limit
     * @return array
     */
    public function intersectEdges($left, $right, $limit)
    {
        $intersections = [];
        end($left);
        $lastLeftWord = current($left);
        reset($left);
        $intersectWidth = 0;
        foreach ($right as $r => $rightWord) {
            if ($lastLeftWord === $rightWord) {
                $intersectWidth = $r + 1;
            }
        }
        if (!$intersectWidth) {
            return [];
        }

        $maxIntersectWidth = min(count($left), count($right), $limit);
        do {
            $leftChunk = array_slice($left, -$intersectWidth, null, false);
            $rightChunk = array_slice($right, 0, $intersectWidth, false);
            $intersectWidth++;
            if ($leftChunk !== $rightChunk) {
                break;
            } else {
                $intersections = $leftChunk;
            }
        } while ($intersectWidth < $maxIntersectWidth);

        return $intersections;
    }

    /**
     * "Склеивает" фрагмент со следующим, создавая новый, итоговый фрагмент.
     * Может объединить ключевые фразы, встречающиеся в пересечении фрагментов.
     * @param Fragment $next Фрагмент, следующий за текущим
     * @return Fragment Новый фрагмент
     */
    public function join(Fragment $next)
    {
        $balance = count($this->getEdgeRight()) - count($next->getEdgeLeft());
        $wordsMiddle = ($balance >= 0) ? $this->getEdgeRight() : $next->getEdgeLeft();
        $keywordList = array_merge([$this->getCenter()], $wordsMiddle, [$next->getCenter()]);
        return new Fragment(
            implode(' ', $keywordList),
            $this->getEdgeLeft(),
            $next->getEdgeRight(),
            $this->getStartPos(),
            $next->getEndPos()
        );
    }
}