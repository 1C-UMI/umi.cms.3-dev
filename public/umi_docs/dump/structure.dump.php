<?php
/**
 * Collection "structure" dump.
 */
return array (
  0 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0035d042-0d55-462e-99f8-20904599b568',
      'displayName' => 'search',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
          'displayName' => 'Виджеты',
          'branch' => NULL,
          'slug' => 'widgets',
        ),
      ),
      'slug' => 'search',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  1 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '01fcd354-d709-44c8-a0b1-930a0ee7390d',
      'displayName' => 'blog.moderate.all.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '28d69521-2101-4bc3-8dcb-4e4656674ec5',
          'displayName' => 'blog.moderate.all',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'all',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  2 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '02242d8c-b757-4d10-8ffa-b60b3810e949',
      'displayName' => 'blog.draft.edit.editLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '85dd95da-8e20-4beb-b70b-d98b1ea0fdab',
          'displayName' => 'blog.draft.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'editlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.edit.editLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование черновика',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование черновика',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogDraft</td>
          <td>BlogPost</td>
          <td></td>
          <td> черновик или GUID редактируемого черновика</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  3 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '0689bb01-7b40-436c-b0e5-c1b6035997f5',
      'displayName' => 'blog.moderate.publish',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'publish',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.publish',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  4 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '06ef34ca-a340-4a37-b3c6-18894678143b',
      'displayName' => 'blog.moderate.publishForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'publishform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.publishForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста, тербующего модерации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  5 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '09443b05-26d5-4b59-a781-6ea92f129939',
      'displayName' => 'users.authorization.login',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'f610b0f2-5805-4c8b-abb6-a7b3d9348d23',
          'displayName' => 'users.authorization',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'authorization',
        ),
      ),
      'slug' => 'login',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization.login',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер авторизации пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер авторизации пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$authenticated</td><td>флаг, указывающий на то, авторизован пользователь или нет </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница авторизаци </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  6 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
      'displayName' => 'blog.reject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'reject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  7 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0a9564bc-a0d6-4777-8284-3580e5dd80e0',
      'displayName' => 'blog.author.profile',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'profile',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.profile',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  8 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0ac8f305-6c62-42e7-a4d7-cf92376ac804',
      'displayName' => 'blog.post.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  9 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0bbcf6f2-0f08-4f68-9e84-e5dcba614098',
      'displayName' => 'blog.comment.publishForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'publishform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.publishForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogComment</td>
          <td>string|BlogComment</td>
          <td></td>
          <td> комментарий или GUID комментария</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  10 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
      'displayName' => 'users',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
          'displayName' => 'Контроллеры',
          'branch' => NULL,
          'slug' => 'controllers',
        ),
      ),
      'slug' => 'users',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  11 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0d2203e6-d3e7-4da6-8b28-256417333b91',
      'displayName' => 'users.registration.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '767688da-a24d-4280-adda-018683c5a664',
          'displayName' => 'users.registration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'registration',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу регистрации пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу регистрации пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  12 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
      'displayName' => 'blog.comment',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'comment',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  13 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0dbacdd3-b68d-41ab-9f86-3dc94872e2b3',
      'displayName' => 'users.restoration.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5f8f9b6-9141-4ea0-beed-695349bf4926',
          'displayName' => 'users.restoration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'restoration',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу запроса смены пароля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу запроса смены пароля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  14 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0e258d53-2cb5-446e-884f-159b20015ce7',
      'displayName' => 'users.restoration.confirmation.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5e6dedfe-f9ed-4d7c-b02c-844be02ae4ec',
          'displayName' => 'users.restoration.confirmation',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd5f8f9b6-9141-4ea0-beed-695349bf4926',
              'displayName' => 'users.restoration',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'restoration',
            ),
          ),
          'slug' => 'confirmation',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.confirmation.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на подтверждение смены пароля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на подтверждение смены пароля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>activationCode</td>
          <td>string</td>
          <td></td>
          <td> код активации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  15 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0e360148-c082-41a7-be4e-d35e3db60e56',
      'displayName' => 'blog.comment.unpublishForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'unpublishform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.unpublishForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет снятия комментария с спубликации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет снятия комментария с спубликации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogComment</td>
          <td>string|BlogComment</td>
          <td></td>
          <td> комментарий или GUID комментария</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  16 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'system',
      'guid' => '0e3b7045-35b9-494a-95bb-a87330537e4d',
      'displayName' => 'Поиск',
      'branch' => NULL,
      'slug' => 'searching',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Поиск',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'search',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'search',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'skipInBreadcrumbs' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
    ),
  ),
  17 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0f2b5382-3549-4602-8efd-39a62bdf1f15',
      'displayName' => 'blog.moderate.all.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5d519c4-17f3-4d51-b36c-4892d7e639e6',
          'displayName' => 'blog.moderate.all',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'all',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  18 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '0f95a38a-47c7-447c-8cd4-0e3cc2526802',
      'displayName' => 'news.rubric.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по рубрике',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по рубрике',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>rubric</td>
          <td>NewsRubric|string|null</td>
          <td></td>
          <td> рубрика или GUID рубрики, URL на RSS которой генерировать. Если не указана, генерируется URL на все новости.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  19 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '0fc1de36-ce89-44b0-9639-22ff4fa91011',
      'displayName' => 'structure.menu',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
          'displayName' => 'structure',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'structure',
        ),
      ),
      'slug' => 'menu',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.menu',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  20 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '10765819-6e1b-4b3b-afbb-b6a4051f3ba0',
      'displayName' => 'blog.post.draft',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'draft',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.draft',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер помещения поста блога в черновики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер помещения поста блога в черновики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  21 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '10805734-ebd6-4f19-ac20-492353e4bb9e',
      'displayName' => 'blog.comment.reject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'reject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.reject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отклонения комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отклонения комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  22 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '146bbb7d-5c4e-44b1-a397-05b5d7e832f1',
      'displayName' => 'blog.tag.postList',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'postlist',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.postList',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по тэгам',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по тэгам',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>tags</td>
          <td>array|BlogTag[]|BlogTag|null</td>
          <td></td>
          <td> тэг, список тэгов блога или GUID, из которых выводятся посты. Если не указаны, то посты выводятся из всех тэгов</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  23 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '148eb816-c49f-488c-88d7-7a6a00841254',
      'displayName' => 'news.subject.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e05d9cd3-7fe6-428e-a215-8f3db8d29f93',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостных сюжетов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостных сюжетов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  24 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '15270f05-1e02-4295-a7c3-70162ea282ca',
      'displayName' => 'blog.category.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9c739f74-beb9-4e2f-ab6c-2884985b153f',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  25 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '15f18041-439d-4935-affb-1380b938a079',
      'displayName' => 'structure.infoblock',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
          'displayName' => 'structure',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'structure',
        ),
      ),
      'slug' => 'infoblock',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.infoblock',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  26 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '1837aaac-92d2-4782-be6c-caacb5a57ff6',
      'displayName' => 'blog.moderate.reject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'reject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.reject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки отклоненного поста на модерацию',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки отклоненного поста на модерацию',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  27 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '1af0a13c-3dca-4c80-91c0-ae3394e5a414',
      'displayName' => 'blog.tag',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'tag',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  28 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '1cd399a1-afc3-4b21-a83a-5ed8a0e32d7c',
      'displayName' => 'blog.tag.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка тэгов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка тэгов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  29 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
      'displayName' => 'blog.post',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'post',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  30 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '219d2c2d-53b5-4f59-a999-257cdae0faf2',
      'displayName' => 'blog.reject.view.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fe0082b8-15db-4ce5-9659-3472dc97a315',
          'displayName' => 'blog.reject.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок отклоненных постов текущего автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок отклоненных постов текущего автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  31 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '261a4925-d2db-422b-a423-3363ab827a77',
      'displayName' => 'blog.moderate.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  32 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '268898a4-b108-493e-a214-3793fb4a367a',
      'displayName' => 'blog.comment.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка коментов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка коментов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>parentNode</td>
          <td>CmsHierarchicObject</td>
          <td></td>
          <td> родительская нода или GUID родительской ноды</td>
        </tr><tr>
          <td>depth</td>
          <td>int</td>
          <td></td>
          <td> глубина вложения</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>blogPost</td>
          <td></td>
          <td></td>
          <td></td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\hmvc\\view\\CmsTreeView</td>
          <td>$tree</td><td>представление дерева </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  33 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '280384f3-5b6b-4121-b098-c2eadfff961f',
      'displayName' => 'users.registration.form',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '767688da-a24d-4280-adda-018683c5a664',
          'displayName' => 'users.registration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'registration',
        ),
      ),
      'slug' => 'form',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.form',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы регистрации пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы регистрации пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>type</td>
          <td>string</td>
          <td></td>
          <td> тип регистрируемого пользователя</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  34 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '28d69521-2101-4bc3-8dcb-4e4656674ec5',
      'displayName' => 'blog.moderate.all',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'all',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  35 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '29a9759c-947e-44c7-b3ff-bbb010a624a7',
      'displayName' => 'search.search',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '995fa1d9-748b-40d0-ad6c-63f7ede8f51a',
          'displayName' => 'search',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'search',
        ),
      ),
      'slug' => 'search',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search.search',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страницы поиска',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страницы поиска',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница поиска </td></tr><tr>
          <td>string</td>
          <td>$query</td><td>текущий поисковый запрос </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  36 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '2ad1e718-1dc6-44d5-8610-48e194ace90e',
      'displayName' => 'blog.tag.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1af0a13c-3dca-4c80-91c0-ae3394e5a414',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  37 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '2b59a1dc-c972-4c1d-9a44-6dd6a1f6dc47',
      'displayName' => 'blog.comment.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  38 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '2c31411b-7e56-4f3e-93ab-f18ab786bd20',
      'displayName' => 'blog.moderate.own',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'own',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  39 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '2c531737-5a3d-4c02-b720-79ad0e19b700',
      'displayName' => 'blog.moderate.own',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'own',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  40 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '2fde6435-4ea2-4ed4-859b-19393170b115',
      'displayName' => 'users.authorization.loginLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '58c35417-0b4c-4c77-8ebb-9dcfb368a55b',
          'displayName' => 'users.authorization',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'authorization',
        ),
      ),
      'slug' => 'loginlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization.loginLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу авторизации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу авторизации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  41 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '313f9cc3-f960-440c-a926-d9b839bbc5c0',
      'displayName' => 'blog.post.add.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '34aba35d-64a6-4bed-ad43-f6d86a930372',
          'displayName' => 'blog.post.add',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'add',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.add.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер добавления поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер добавления поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница добавления поста </td></tr><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>созданный пост блога. Передается только, если пост был успешно добавлен </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'addPost',
      ),
    ),
  ),
  42 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '319f1f6e-4d2f-4af8-bbfd-20197e211236',
      'displayName' => 'users.profile.password.form',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'dbe3b517-ebb5-4f89-96e4-e140474dfeaa',
          'displayName' => 'users.profile.password',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
              'displayName' => 'users.profile',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'profile',
            ),
          ),
          'slug' => 'password',
        ),
      ),
      'slug' => 'form',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.password.form',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы смены пароля пароля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы смены пароля пароля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  43 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '31fe5dc6-59f8-49c1-97fd-72711bf6db78',
      'displayName' => 'blog.category.postList',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c233dc83-f29a-4a51-9dab-da91e17bbc1e',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'postlist',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.postList',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по категориям',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по категориям',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>categories</td>
          <td>array|BlogCategory[]|BlogCategory|null</td>
          <td></td>
          <td>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  44 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '3242dd47-8523-4838-8794-efe3a6b601dc',
      'displayName' => 'blog.draft.sendToModerationForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'sendtomoderationform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.sendToModerationForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отправки поста на модерацию',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отправки поста на модерацию',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogDraft</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> черновик или GUID черновика отправляемого на модерацию</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  45 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '33e0b067-f109-47b0-be6d-dafa212e88fb',
      'displayName' => 'news.item.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'f261b858-e67e-4274-971f-f7ee618d6786',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  46 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '34a90c23-333d-40bd-8711-6a09dc8ab0e3',
      'displayName' => 'blog.category.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c233dc83-f29a-4a51-9dab-da91e17bbc1e',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка категорий блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка категорий блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>parentCategory</td>
          <td>string|null|BlogCategory</td>
          <td></td>
          <td> категория блога или GUID, из которой выводятся дочерние категории. Если не указан, выводятся все корневые категории.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  47 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '34aba35d-64a6-4bed-ad43-f6d86a930372',
      'displayName' => 'blog.post.add',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'add',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.add',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  48 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '34ec8a09-9458-4687-b360-fa4a1ba93f5b',
      'displayName' => 'news.subject.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e05d9cd3-7fe6-428e-a215-8f3db8d29f93',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода сюжета новостей',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода сюжета новостей',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>subject</td>
          <td>string|NewsSubject</td>
          <td></td>
          <td> сюжет или GUID</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#NewsSubject">NewsSubject</a></td>
          <td>$subject</td><td>новостной сюжет </td></tr></tbody>
              </table><a name="NewsSubject"></a><h4>NewsSubject</h4><p>Новостной сюжет.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$news</td><td>новости сюжета </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$rss</td><td>RSS-ленты сюжета </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  49 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '36e7c6a4-2f7a-451c-ace6-0c5aa6e89d74',
      'displayName' => 'blog.reject.edit.editLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b0d679bd-34e8-49a6-97fe-1c4cfa6a9a87',
          'displayName' => 'blog.reject.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'editlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.edit.editLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на редактирование отклоненного поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на редактирование отклоненного поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID отклоненного поста</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  50 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '3874545c-0db7-44e0-b3d4-dbf2f123d1b5',
      'displayName' => 'users.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  51 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '389bbc53-9d57-41c2-a59a-ed6d58acabea',
      'displayName' => 'blog.moderate.own.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '2c531737-5a3d-4c02-b720-79ad0e19b700',
          'displayName' => 'blog.moderate.own',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'own',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок постов текущего автора, требующих модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок постов текущего автора, требующих модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  52 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '39dc5d15-c8a9-4f6e-bac4-f65cb0343222',
      'displayName' => 'users.authorization.logout',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'f610b0f2-5805-4c8b-abb6-a7b3d9348d23',
          'displayName' => 'users.authorization',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'authorization',
        ),
      ),
      'slug' => 'logout',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization.logout',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Крнтроллер &quot;разавторизации&quot; пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Крнтроллер "разавторизации" пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  53 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '3e09171b-cd8d-432a-826c-d800f9722a49',
      'displayName' => 'blog.moderate.rejectForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'rejectform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.rejectForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отклонения поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отклонения поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста, тербующего модерации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  54 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '3eeca07b-c82e-4d88-a357-3e9d6c4931b9',
      'displayName' => 'blog.moderate.all.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5d519c4-17f3-4d51-b36c-4892d7e639e6',
          'displayName' => 'blog.moderate.all',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'all',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок всех черновиков',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок всех черновиков',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  55 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '3f5f72ec-8fc1-4c19-b2dc-3d68f3b0f00a',
      'displayName' => 'blog.reject.view.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fe0082b8-15db-4ce5-9659-3472dc97a315',
          'displayName' => 'blog.reject.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка отклоненных постов текущего автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка отклоненных постов текущего автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  56 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '3fffd5f8-7f47-440e-88fc-b10d9fe5a1fc',
      'displayName' => 'blog.draft.view.draft',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e6693b4a-d8d7-4192-b611-e57b1e43fa0e',
          'displayName' => 'blog.draft.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'draft',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view.draft',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода черновика поста блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода черновика поста блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogDraft</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> GUID или черновик</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>черновик поста блога </td></tr></tbody>
              </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  57 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '424b2e46-69f6-4be9-9840-84118c80ef08',
      'displayName' => 'blog.draft.view.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e6693b4a-d8d7-4192-b611-e57b1e43fa0e',
          'displayName' => 'blog.draft.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок черновиков текущего автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на спискок черновиков текущего автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  58 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '446539c3-6960-4b9d-9fad-5583d9f4302c',
      'displayName' => 'blog.post.view.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7b7a1070-e717-46f5-b523-ab6f2244b419',
          'displayName' => 'blog.post.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  59 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '449febc6-9fdb-468e-aeb8-d1d1e1287a64',
      'displayName' => 'blog.post.view.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'efd0cf61-7f28-49b3-a253-3408ce105c0a',
          'displayName' => 'blog.post.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> GUID или поста</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>пост блога </td></tr></tbody>
              </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  60 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '4655d73f-533d-4d8c-b613-f7e526e33feb',
      'displayName' => 'blog.author.view.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '6f121cc0-3c6f-4c30-8e7e-b3b246a435db',
          'displayName' => 'blog.author.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  61 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '48227d90-22ad-49a5-9005-0bb175aa5bac',
      'displayName' => 'blog.category.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c233dc83-f29a-4a51-9dab-da91e17bbc1e',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по категории',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по категории',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>category</td>
          <td>BlogCategory|string|null</td>
          <td></td>
          <td>es категория или GUID, URL на RSS которой генерировать. Если не указана, генерируется URL на все посты.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  62 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
      'displayName' => 'blog.moderate',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'moderate',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  63 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '4d412823-0d9a-47f5-b0e0-da6062489d20',
      'displayName' => 'news.rubric.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода рубрики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода рубрики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>rubric</td>
          <td>string|NewsRubric</td>
          <td></td>
          <td> рубрика или GUID рубрики</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#NewsRubric">NewsRubric</a></td>
          <td>$rubric</td><td>новостная рубрика </td></tr></tbody>
              </table><a name="NewsRubric"></a><h4>NewsRubric</h4><p>Новостная рубрика.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>IObjectSet</td>
          <td>$news</td><td>новости рубрики </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  64 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '4e450f41-abdb-4813-907f-14c12d983efd',
      'displayName' => 'blog.author.view.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '6f121cc0-3c6f-4c30-8e7e-b3b246a435db',
          'displayName' => 'blog.author.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  65 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '4e7317bf-b562-4e76-9e61-3aba220e9fa9',
      'displayName' => 'blog.comment.publish',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'publish',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.publish',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  66 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '4fb8933f-b405-4137-b47c-36e0c242beef',
      'displayName' => 'search.results',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0035d042-0d55-462e-99f8-20904599b568',
          'displayName' => 'search',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'search',
        ),
      ),
      'slug' => 'results',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search.results',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода результатов поиска',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода результатов поиска',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>query</td>
          <td>string</td>
          <td></td>
          <td> строка поиска</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  67 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '515a3b57-7513-456d-9756-ac320a343506',
      'displayName' => 'news.rubric',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'rubric',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  68 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '52b64e42-d352-4a43-881d-e8a9cfa7409c',
      'displayName' => 'blog.author.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по автору',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по автору',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogAuthor</td>
          <td>string|BlogAuthor</td>
          <td></td>
          <td> автор, для постов которого формировать RSS-ленту.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  69 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '536cf214-548c-4573-96c1-07f53282f765',
      'displayName' => 'news',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
          'displayName' => 'Виджеты',
          'branch' => NULL,
          'slug' => 'widgets',
        ),
      ),
      'slug' => 'news',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  70 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '537ee7eb-01a4-4197-9fba-99e93c105661',
      'displayName' => 'users.profile',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'profile',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  71 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'system',
      'guid' => '54d69b05-2bcf-43fd-9297-9d3d25ca1c9f',
      'displayName' => 'Меню',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'system',
          'guid' => '5d4c06dd-c6a4-4d74-a661-21103439b289',
          'displayName' => 'Структура',
          'branch' => NULL,
          'slug' => 'system',
        ),
      ),
      'slug' => 'menu',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Меню',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'menu',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure.menu',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'skipInBreadcrumbs' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
    ),
  ),
  72 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '55284ab1-ff7e-4ba6-9953-dd6f1eadeb70',
      'displayName' => 'blog.tag.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1af0a13c-3dca-4c80-91c0-ae3394e5a414',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  73 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '5640234b-6b70-48d5-ab52-38b4c3cd4fb2',
      'displayName' => 'users.registration.activation.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '99bc23bf-3c67-4146-a1b2-fac5971f5915',
          'displayName' => 'users.registration.activation',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '767688da-a24d-4280-adda-018683c5a664',
              'displayName' => 'users.registration',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'registration',
            ),
          ),
          'slug' => 'activation',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.activation.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на активацию пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на активацию пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>activationCode</td>
          <td>string</td>
          <td></td>
          <td> код активации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  74 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '58816392-ea60-4b98-a90d-5fd136dbe1fe',
      'displayName' => 'blog.post.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  75 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '58c35417-0b4c-4c77-8ebb-9dcfb368a55b',
      'displayName' => 'users.authorization',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'authorization',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  76 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '59633ba2-b358-41ab-8bf7-6098e82a609f',
      'displayName' => 'news.subject.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '71386eb7-06ad-4096-bd59-2b9e6ebbdbf0',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  77 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '5b9eb30a-b741-4119-9cfb-c94f1bdfae2d',
      'displayName' => 'blog.author.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  78 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '5bcaf048-7650-4dde-9e99-37ab2ec023c0',
      'displayName' => 'news.item.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd2be550d-6034-4adf-8025-e1890e6964bd',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  79 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '5bd409ab-8b0f-44b6-91f2-2f6aa1ba3110',
      'displayName' => 'users.restoration.confirmation',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9a9468dd-a5c2-437a-8ff9-12d4f6853778',
          'displayName' => 'users.restoration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'restoration',
        ),
      ),
      'slug' => 'confirmation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.confirmation',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  80 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '5bfdf20d-b15b-47b5-a8f1-54775984158d',
      'displayName' => 'structure.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fee13476-00be-4bd4-a519-88886b2af20e',
          'displayName' => 'structure',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'structure',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  81 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '5c7cf6b7-5da3-43c8-b4f4-b6dcb3e567b1',
      'displayName' => 'blog.tag.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по тэгу',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по тэгу',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogTag</td>
          <td>string|BlogTag</td>
          <td></td>
          <td> тэг блога или GUID, по которому формируется RSS-лента</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  82 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
      'displayName' => 'blog.post',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'post',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  83 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'system',
      'guid' => '5d4c06dd-c6a4-4d74-a661-21103439b289',
      'displayName' => 'Структура',
      'branch' => NULL,
      'slug' => 'system',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Структура',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'skipInBreadcrumbs' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
    ),
  ),
  84 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '5e6dedfe-f9ed-4d7c-b02c-844be02ae4ec',
      'displayName' => 'users.restoration.confirmation',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5f8f9b6-9141-4ea0-beed-695349bf4926',
          'displayName' => 'users.restoration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'restoration',
        ),
      ),
      'slug' => 'confirmation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.confirmation',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  85 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '5e86b85f-13e8-4d6e-9314-770994c03bc6',
      'displayName' => 'blog.moderate.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  86 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '61e00461-2af1-4bff-9dd8-7ba3319eee05',
      'displayName' => 'blog.draft.publishForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'publishform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.publishForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации черновика',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет публикации черновика',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogDraft</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> черновик или GUID черновика</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  87 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '62d70eab-48ef-4b19-afdc-e0ee7d82e7a8',
      'displayName' => 'users.profile.password.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '871eb38f-10d2-405f-a46f-dc5de7fcd897',
          'displayName' => 'users.profile.password',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '537ee7eb-01a4-4197-9fba-99e93c105661',
              'displayName' => 'users.profile',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'profile',
            ),
          ),
          'slug' => 'password',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.password.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер изменения пароля пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер изменения пароля пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница изменения пароля пользователя </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  88 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
      'displayName' => 'structure',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
          'displayName' => 'Виджеты',
          'branch' => NULL,
          'slug' => 'widgets',
        ),
      ),
      'slug' => 'structure',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  89 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '63d753cf-c5a6-4f46-ae65-4998ca41cdd0',
      'displayName' => 'blog.tag.cloud',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'cloud',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.cloud',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода облака тэгов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода облака тэгов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>minFontSize</td>
          <td>int</td>
          <td></td>
          <td> минимальный размер шрифта</td>
        </tr><tr>
          <td>maxFontSize</td>
          <td>int</td>
          <td></td>
          <td> максимальный размер шрифта</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array</td>
          <td>$tags</td><td>список тегов в формате [ \'tag\' => Tag $tag, \'weight\' => float вес тэга в облаке ] </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  90 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '65164834-4527-4094-8cb9-bfa1c68cc458',
      'displayName' => 'blog.comment.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода комментариев',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода комментариев',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogComment</td>
          <td>string|BlogComment</td>
          <td></td>
          <td> комментарий или GUID комментария</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogComment">BlogComment</a></td>
          <td>$blogComment</td><td>комментарий в блоге </td></tr></tbody>
              </table><a name="BlogComment"></a><h4>BlogComment</h4><p>Комментарий к посту.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>BlogPost</td>
          <td>$post</td><td>пост, к которому относится комментарий </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата и время публикации комментария </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>комментарий </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации комментария </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  91 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '65ddd597-9658-4da5-8a20-ee648785e33c',
      'displayName' => 'blog.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  92 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '67c92da2-91f6-4f3f-93b4-3480da51b403',
      'displayName' => 'users.registration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'registration',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  93 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '68161ad8-e43f-489c-9b12-8cf4313d974c',
      'displayName' => 'blog.reject.view.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '78fb761d-6a85-42ad-abf6-00d65f7edcc3',
          'displayName' => 'blog.reject.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  94 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '697107aa-42d6-485a-9103-7efabed040e4',
      'displayName' => 'blog.post.add.addLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c012a36d-e0a4-47fd-a784-f54a64a51977',
          'displayName' => 'blog.post.add',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'add',
        ),
      ),
      'slug' => 'addlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.add.addLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на добавление поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на добавление поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogCategory</td>
          <td>string|BlogCategory</td>
          <td></td>
          <td> категория или GUID в которую добавляется пост</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  95 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '6b121813-0c7a-4cc6-9ebe-82e10261e6df',
      'displayName' => 'users.registration.activation',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '67c92da2-91f6-4f3f-93b4-3480da51b403',
          'displayName' => 'users.registration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'registration',
        ),
      ),
      'slug' => 'activation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.activation',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  96 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '6cf6a370-0bd2-4e07-bc7d-7fc259175673',
      'displayName' => 'blog.comment.add',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'add',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.add',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  97 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '6d1734b5-ef66-44ad-9612-d9177c267fc0',
      'displayName' => 'structure.infoblock.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '15f18041-439d-4935-affb-1380b938a079',
          'displayName' => 'structure.infoblock',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
              'displayName' => 'structure',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'structure',
            ),
          ),
          'slug' => 'infoblock',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.infoblock.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода информационного блока',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода информационного блока',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет.</td>
        </tr><tr>
          <td>infoBlock</td>
          <td>BaseInfoBlock</td>
          <td></td>
          <td> информационный блок или его название</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BaseInfoBlock">BaseInfoBlock</a></td>
          <td>$infoBlock</td><td>информационный блок </td></tr></tbody>
              </table><a name="BaseInfoBlock"></a><h4>BaseInfoBlock</h4><p>Информационный блок сайта.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>string</td>
          <td>$infoblockName</td><td>название информационного блока </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  98 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '6f121cc0-3c6f-4c30-8e7e-b3b246a435db',
      'displayName' => 'blog.author.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  99 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '71386eb7-06ad-4096-bd59-2b9e6ebbdbf0',
      'displayName' => 'news.subject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'subject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  100 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '740c70a3-9cdd-48e4-9394-9f378f2ab2dc',
      'displayName' => 'blog.moderate.all.post',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5d519c4-17f3-4d51-b36c-4892d7e639e6',
          'displayName' => 'blog.moderate.all',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'all',
        ),
      ),
      'slug' => 'post',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all.post',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста требующего модерации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>пост блога </td></tr></tbody>
              </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  101 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '740c837f-afd8-4a7d-8111-34ec8f1e0808',
      'displayName' => 'users.registration.activation.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '6b121813-0c7a-4cc6-9ebe-82e10261e6df',
          'displayName' => 'users.registration.activation',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '67c92da2-91f6-4f3f-93b4-3480da51b403',
              'displayName' => 'users.registration',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'registration',
            ),
          ),
          'slug' => 'activation',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.activation.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер активации пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер активации пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>bool</td>
          <td>$authenticated</td><td>флаг, указывающий на то, авторизован пользователь или нет </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница активации </td></tr><tr>
          <td><a href="#RegisteredUser">RegisteredUser</a></td>
          <td>$user</td><td>активированный пользователь в случае успеха </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список произошедших ошибок в случае неуспеха </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table><a name="RegisteredUser"></a><h4>RegisteredUser</h4><p>Зарегистрированный пользователь.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$groups</td><td>группы, в которые входит пользователь </td></tr><tr>
          <td>string</td>
          <td>$login</td><td>логин </td></tr><tr>
          <td>string</td>
          <td>$email</td><td>e-mail </td></tr><tr>
          <td>string</td>
          <td>$firstName</td><td>имя </td></tr><tr>
          <td>string</td>
          <td>$middleName</td><td>отчество </td></tr><tr>
          <td>string</td>
          <td>$lastName</td><td>фамилия </td></tr><tr>
          <td>\\DateTime</td>
          <td>$registrationDate</td><td>дата регистрации </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  102 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '767688da-a24d-4280-adda-018683c5a664',
      'displayName' => 'users.registration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'registration',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  103 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '77907833-946c-4b46-b3b7-096868ee46cb',
      'displayName' => 'users.authorization.logoutForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '58c35417-0b4c-4c77-8ebb-9dcfb368a55b',
          'displayName' => 'users.authorization',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'authorization',
        ),
      ),
      'slug' => 'logoutform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization.logoutForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет формы &quot;разавторизации&quot;',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет формы "разавторизации"',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  104 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '78362cc5-ea0a-4bd9-9a2f-f7df1a79c122',
      'displayName' => 'blog.comment.rejectForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'rejectform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.rejectForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отклонения комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отклонения комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogComment</td>
          <td>string|BlogComment</td>
          <td></td>
          <td> комментарий или GUID комментария</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  105 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '78fb761d-6a85-42ad-abf6-00d65f7edcc3',
      'displayName' => 'blog.reject.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  106 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
      'displayName' => 'blog.reject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'reject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  107 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '79dcf957-2dd7-4d73-ae1c-415daf91dc65',
      'displayName' => 'blog.reject.view.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fe0082b8-15db-4ce5-9659-3472dc97a315',
          'displayName' => 'blog.reject.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода отклоненного поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода отклоненного поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID отклоненного поста</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>пост блога </td></tr></tbody>
              </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  108 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '79e8f566-6853-4c83-8e76-e65988c3f1b2',
      'displayName' => 'blog.reject.sendToModerationForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'sendtomoderationform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.sendToModerationForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отправки поста на модерацию',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет отправки поста на модерацию',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста отправляемого на модерацию</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  109 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '7a678a62-c45e-4366-ab0f-19be5c86d6e0',
      'displayName' => 'blog.reject.view.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '78fb761d-6a85-42ad-abf6-00d65f7edcc3',
          'displayName' => 'blog.reject.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода отклоненного поста блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода отклоненного поста блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  110 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '7b7a1070-e717-46f5-b523-ab6f2244b419',
      'displayName' => 'blog.post.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  111 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
      'displayName' => 'blog.tag',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'tag',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  112 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '7f1ce14d-87f9-41e0-bf67-77dc207d85dc',
      'displayName' => 'users.registration.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '67c92da2-91f6-4f3f-93b4-3480da51b403',
          'displayName' => 'users.registration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'registration',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер регистрации пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер регистрации пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td>bool</td>
          <td>$authenticated</td><td>флаг, указывающий на то, авторизован пользователь или нет </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница регистрации пользователя </td></tr><tr>
          <td><a href="#RegisteredUser">RegisteredUser</a></td>
          <td>$user</td><td>новый зарегистрированный пользователь текущая страница регистрации пользователя </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table><a name="RegisteredUser"></a><h4>RegisteredUser</h4><p>Зарегистрированный пользователь.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$groups</td><td>группы, в которые входит пользователь </td></tr><tr>
          <td>string</td>
          <td>$login</td><td>логин </td></tr><tr>
          <td>string</td>
          <td>$email</td><td>e-mail </td></tr><tr>
          <td>string</td>
          <td>$firstName</td><td>имя </td></tr><tr>
          <td>string</td>
          <td>$middleName</td><td>отчество </td></tr><tr>
          <td>string</td>
          <td>$lastName</td><td>фамилия </td></tr><tr>
          <td>\\DateTime</td>
          <td>$registrationDate</td><td>дата регистрации </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  113 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '804d4032-f76c-47b1-9822-b50f0ef4327a',
      'displayName' => 'blog.post.edit.editLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '58816392-ea60-4b98-a90d-5fd136dbe1fe',
          'displayName' => 'blog.post.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'editlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.edit.editLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogPost</td>
          <td>BlogPost</td>
          <td></td>
          <td> пост или GUID редактируемого поста</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  114 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '805fba33-c692-40f5-b243-2807b5f76e5d',
      'displayName' => 'news.rubric.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '515a3b57-7513-456d-9756-ac320a343506',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты рубрики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты рубрики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  115 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '819b37d0-93dc-450b-a05b-4c12cc208a16',
      'displayName' => 'blog.tag.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1af0a13c-3dca-4c80-91c0-ae3394e5a414',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  116 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '821f290e-2759-4114-863c-f77243334863',
      'displayName' => 'blog.author.profile.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '913b9c1f-95b5-4784-8f90-7b1c5344ea40',
          'displayName' => 'blog.author.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.profile.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования профиля автора блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования профиля автора блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования профиля автора </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'editProfile',
      ),
    ),
  ),
  117 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
      'displayName' => 'users',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
          'displayName' => 'Виджеты',
          'branch' => NULL,
          'slug' => 'widgets',
        ),
      ),
      'slug' => 'users',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  118 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '85dd95da-8e20-4beb-b70b-d98b1ea0fdab',
      'displayName' => 'blog.draft.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  119 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
      'displayName' => 'blog.author',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'author',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  120 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '86bdb4d2-9ab9-4592-973f-a2601794e470',
      'displayName' => 'blog.post.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по категории',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по категории',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  121 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '871eb38f-10d2-405f-a46f-dc5de7fcd897',
      'displayName' => 'users.profile.password',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '537ee7eb-01a4-4197-9fba-99e93c105661',
          'displayName' => 'users.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'password',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.password',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  122 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '8ac20a28-e1aa-40ed-a040-98808e22f0e3',
      'displayName' => 'blog.moderate.draft',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'draft',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.draft',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер снятия поста с модерации и переноса в черновики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер снятия поста с модерации и переноса в черновики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  123 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '8b9e807a-341c-4cc6-8323-b61fe05324f9',
      'displayName' => 'blog.draft.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  124 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '8bdeaed9-47cf-4722-b2c2-d5f42c8a3fa8',
      'displayName' => 'news.subject.newsList',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e05d9cd3-7fe6-428e-a215-8f3db8d29f93',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'newslist',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.newsList',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей по сюжетам',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей по сюжетам',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>subjects</td>
          <td>array|NewsSubject[]|NewsSubject|null</td>
          <td></td>
          <td> сюжет, новостных сюжетов или GUID, из которых выводятся новости. Если не указаны, то выводятся новости всех сюжетов</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  125 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '8ef66359-b0f5-48b2-bef5-96612796f6b3',
      'displayName' => 'users.profile.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
          'displayName' => 'users.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу редактирования профиля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу редактирования профиля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  126 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '8f399ada-205c-4d44-bbd8-52c57df8a8b1',
      'displayName' => 'blog.draft.publish',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'publish',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.publish',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации черновика',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер публикации черновика',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  127 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '8f6532c0-6daa-41a5-baec-c91f5b5b8b37',
      'displayName' => 'news.item.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd2be550d-6034-4adf-8025-e1890e6964bd',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  128 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '9017a315-0aac-4602-998b-d994434cfd60',
      'displayName' => 'blog.reject.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  129 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '913b9c1f-95b5-4784-8f90-7b1c5344ea40',
      'displayName' => 'blog.author.profile',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'profile',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.profile',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  130 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '927a4457-9847-4293-964c-b165f4ce3cdd',
      'displayName' => 'search.fragments',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0035d042-0d55-462e-99f8-20904599b568',
          'displayName' => 'search',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'search',
        ),
      ),
      'slug' => 'fragments',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search.fragments',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выводящий подсвеченные фрагменты-цитаты результата поиска',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выводящий подсвеченные фрагменты-цитаты результата поиска',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>page</td>
          <td>ICmsPage</td>
          <td></td>
          <td>lt страница, которая попала в результат поиска</td>
        </tr><tr>
          <td>query</td>
          <td>string</td>
          <td></td>
          <td> запрос, по которому найден результат</td>
        </tr><tr>
          <td>contextWordsLimit</td>
          <td>int</td>
          <td></td>
          <td> сколько слов контекста выводить в цитате</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$query</td><td>поисковый запрос </td></tr><tr>
          <td>umicms\\project\\module\\search\\model\\highlight\\Fragmenter</td>
          <td>$fragmenter</td><td>фрагментатор текста по найденным в нем словам </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  131 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '938c447d-e4fa-44fa-82b7-4484f65648e7',
      'displayName' => 'news.rubric.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '515a3b57-7513-456d-9756-ac320a343506',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  132 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '942bba00-5177-4f1b-8d51-9cf50ed2215e',
      'displayName' => 'news.item.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'f261b858-e67e-4274-971f-f7ee618d6786',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по рубрике',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на RSS-ленту по рубрике',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  133 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '9501283e-28bd-439f-8841-42c164acea6c',
      'displayName' => 'users.restoration.confirmation.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5bd409ab-8b0f-44b6-91f2-2f6aa1ba3110',
          'displayName' => 'users.restoration.confirmation',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '9a9468dd-a5c2-437a-8ff9-12d4f6853778',
              'displayName' => 'users.restoration',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'restoration',
            ),
          ),
          'slug' => 'confirmation',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.confirmation.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер сброса пароля пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер сброса пароля пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница сброса пароля пользователя </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное отправку нового пароля </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список произошедших ошибок, не передается, если ошибок не было </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  134 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '9546fd70-5b0b-400e-9dd7-1f2c94e0f1b2',
      'displayName' => 'blog.moderate.own.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '2c531737-5a3d-4c02-b720-79ad0e19b700',
          'displayName' => 'blog.moderate.own',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'own',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов текущего автора, требующих модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов текущего автора, требующих модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  135 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '9777bad1-f9a7-427b-8539-7e9ed4de7ff1',
      'displayName' => 'search.highlight',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0035d042-0d55-462e-99f8-20904599b568',
          'displayName' => 'search',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'search',
        ),
      ),
      'slug' => 'highlight',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search.highlight',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выделяющий подстроку с учетом морфологии в тексте',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выделяющий подстроку с учетом морфологии в тексте',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>text</td>
          <td>string</td>
          <td></td>
          <td></td>
        </tr><tr>
          <td>query</td>
          <td>string</td>
          <td></td>
          <td></td>
        </tr><tr>
          <td>highlightStart</td>
          <td>string</td>
          <td></td>
          <td>tStart</td>
        </tr><tr>
          <td>highlightEnd</td>
          <td>string</td>
          <td></td>
          <td>ghtEnd</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  136 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '98453f01-5d8c-43f7-a084-a1ac1ce433c0',
      'displayName' => 'blog.moderate.edit.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c3b3a011-e9cf-40ef-b0f1-4dcd7c63b55e',
          'displayName' => 'blog.moderate.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.edit.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования поста блога, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования поста блога, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования поста </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'editPost',
      ),
    ),
  ),
  137 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '995fa1d9-748b-40d0-ad6c-63f7ede8f51a',
      'displayName' => 'search',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
          'displayName' => 'Контроллеры',
          'branch' => NULL,
          'slug' => 'controllers',
        ),
      ),
      'slug' => 'search',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  138 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '99bc23bf-3c67-4146-a1b2-fac5971f5915',
      'displayName' => 'users.registration.activation',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '767688da-a24d-4280-adda-018683c5a664',
          'displayName' => 'users.registration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'registration',
        ),
      ),
      'slug' => 'activation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.registration.activation',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  139 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '9a9468dd-a5c2-437a-8ff9-12d4f6853778',
      'displayName' => 'users.restoration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'restoration',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  140 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '9b91f0c2-6636-48da-9c31-26c3803f26d3',
      'displayName' => 'news.subject.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '71386eb7-06ad-4096-bd59-2b9e6ebbdbf0',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  141 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '9bd369ec-49ca-4b4a-a2f4-1d3b1ee0af25',
      'displayName' => 'users.restoration.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9a9468dd-a5c2-437a-8ff9-12d4f6853778',
          'displayName' => 'users.restoration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'restoration',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер запроса смены пароля пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер запроса смены пароля пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница запроса смены пароля </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  142 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => '9c739f74-beb9-4e2f-ab6c-2884985b153f',
      'displayName' => 'blog.category',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'category',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  143 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => '9d422ed3-9d7e-40d0-8b79-6d61fa716cb1',
      'displayName' => 'users.restoration.form',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd5f8f9b6-9141-4ea0-beed-695349bf4926',
          'displayName' => 'users.restoration',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'restoration',
        ),
      ),
      'slug' => 'form',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration.form',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы запроса смены пароля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы запроса смены пароля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  144 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '9f6f8e14-27e6-4ce7-9f36-9e4b94fd0512',
      'displayName' => 'blog.reject.sendToModeration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'sendtomoderation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.sendToModeration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки поста на модерацию',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки поста на модерацию',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  145 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => '9f9b8d8b-cd02-444b-aedb-b14db477ecbe',
      'displayName' => 'blog.reject.edit.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9017a315-0aac-4602-998b-d994434cfd60',
          'displayName' => 'blog.reject.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
              'displayName' => 'blog.reject',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'reject',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.edit.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования отклоненного поста блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования отклоненного поста блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования поста </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'editPost',
      ),
    ),
  ),
  146 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'a0f279bd-cdfe-4bb3-b271-05dec70077d0',
      'displayName' => 'blog.post.edit.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0ac8f305-6c62-42e7-a4d7-cf92376ac804',
          'displayName' => 'blog.post.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.edit.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования поста блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования поста блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования поста </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'editPost',
      ),
    ),
  ),
  147 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'a470c37a-900e-45d0-bf9c-db7c2ff69aad',
      'displayName' => 'users.profile.password.link',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'dbe3b517-ebb5-4f89-96e4-e140474dfeaa',
          'displayName' => 'users.profile.password',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
              'displayName' => 'users.profile',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
                  'displayName' => 'users',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'users',
                ),
              ),
              'slug' => 'profile',
            ),
          ),
          'slug' => 'password',
        ),
      ),
      'slug' => 'link',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.password.link',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу изменения пароля',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода ссылки на страницу изменения пароля',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  148 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
      'displayName' => 'blog.author',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'author',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  149 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'a70fdc41-8e6a-40c2-a4d1-e46545392f57',
      'displayName' => 'blog.moderate.own.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '2c31411b-7e56-4f3e-93ab-f18ab786bd20',
          'displayName' => 'blog.moderate.own',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'own',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода поста блога, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода поста блога, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  150 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'a80f3b87-6832-4996-9318-50ec3b2d14b1',
      'displayName' => 'blog.draft.edit.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '8b9e807a-341c-4cc6-8323-b61fe05324f9',
          'displayName' => 'blog.draft.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.edit.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования черновика блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер редактирования черновика блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования черновика </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'blogDraft',
      ),
    ),
  ),
  151 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'a9a850ea-8739-46d1-b8ec-ef6b8e7a82cd',
      'displayName' => 'blog.category.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c233dc83-f29a-4a51-9dab-da91e17bbc1e',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода категории постов блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода категории постов блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>category</td>
          <td>string|BlogCategory</td>
          <td></td>
          <td> категория или GUID</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogCategory">BlogCategory</a></td>
          <td>$category</td><td>категория постов блога </td></tr></tbody>
              </table><a name="BlogCategory"></a><h4>BlogCategory</h4><p>Категория поста.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>IObjectSet</td>
          <td>$posts</td><td>категория поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  152 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'aa99b872-fb43-4803-912b-bdefe4802b22',
      'displayName' => 'blog.comment.add.addForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c91fcfbf-7655-4ef9-98ad-6859b8997eda',
          'displayName' => 'blog.comment.add',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
              'displayName' => 'blog.comment',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'comment',
            ),
          ),
          'slug' => 'add',
        ),
      ),
      'slug' => 'addform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.add.addForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет добавления вывода формы добавления комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет добавления вывода формы добавления комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста</td>
        </tr><tr>
          <td>blogComment</td>
          <td>null|string|BlogComment</td>
          <td></td>
          <td> комментарий или GUID родительского комментария</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  153 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'aaebd89c-d599-47ce-8851-82aad2381467',
      'displayName' => 'blog.comment.unpublish',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'unpublish',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.unpublish',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер снятия комментария с публикации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер снятия комментария с публикации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  154 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'ab6a047a-8aff-4ed3-98c5-5a5cecd97160',
      'displayName' => 'blog.post.view.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'efd0cf61-7f28-49b3-a253-3408ce105c0a',
          'displayName' => 'blog.post.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  155 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'ad0447c3-534f-418e-85eb-d8b5efd908e0',
      'displayName' => 'structure.menu.auto',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0fc1de36-ce89-44b0-9639-22ff4fa91011',
          'displayName' => 'structure.menu',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
              'displayName' => 'structure',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'structure',
            ),
          ),
          'slug' => 'menu',
        ),
      ),
      'slug' => 'auto',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.menu.auto',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода автогенерируемого меню',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода автогенерируемого меню',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет.</td>
        </tr><tr>
          <td>branch</td>
          <td>string|StructureElement</td>
          <td></td>
          <td> ветка или GUID, от которой строится меню. Если не задано, меню строится от корня сайта.</td>
        </tr><tr>
          <td>depth</td>
          <td>int</td>
          <td></td>
          <td> уровень вложенности меню.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки при значении true игнорируется.</td>
        </tr><tr>
          <td>fields</td>
          <td>string</td>
          <td></td>
          <td> список имен полей, с которыми нужно загрузить объекты, в виде строки с разделителем в виде запятой</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array</td>
          <td>$menu</td><td>элементы меню в формате: [ [ \'page\' => StructureElement $page, \'active\' => bool страница находится в списке хлебных крошек для текущей странице , \'current\' => bool страница является текущей, \'children\' => array список дочерних элементов меню ], ... ] </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  156 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'adc5cfa3-4bd2-415e-95ec-9a794d4c25bf',
      'displayName' => 'blog.author.view.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5b9eb30a-b741-4119-9cfb-c94f1bdfae2d',
          'displayName' => 'blog.author.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка авторов',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка авторов',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  157 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'af06be24-a8ab-4a5d-be63-361b35381f6a',
      'displayName' => 'news.item.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd2be550d-6034-4adf-8025-e1890e6964bd',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер для отображения новости',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер для отображения новости',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  158 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
      'displayName' => 'blog.moderate',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'moderate',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  159 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'b077d00f-ca1e-429f-b4b0-6467420ed184',
      'displayName' => 'news.rubric.newsList',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'newslist',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.newsList',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей по рубрикам',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостей по рубрикам',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>rubrics</td>
          <td>array|NewsRubric[]|NewsRubric|null</td>
          <td></td>
          <td> рубрика, список новостных рубрик или GUID, из которых выводятся новости. Если не указаны, то новости выводятся из всех рубрик</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  160 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'b0d679bd-34e8-49a6-97fe-1c4cfa6a9a87',
      'displayName' => 'blog.reject.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  161 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'b1c855d4-12b0-483f-9bab-393fc81e0850',
      'displayName' => 'users.profile.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
          'displayName' => 'users.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода профиля текущего пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода профиля текущего пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#RegisteredUser">RegisteredUser</a></td>
          <td>$user</td><td>текущий пользователь </td></tr></tbody>
              </table><a name="RegisteredUser"></a><h4>RegisteredUser</h4><p>Зарегистрированный пользователь.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$groups</td><td>группы, в которые входит пользователь </td></tr><tr>
          <td>string</td>
          <td>$login</td><td>логин </td></tr><tr>
          <td>string</td>
          <td>$email</td><td>e-mail </td></tr><tr>
          <td>string</td>
          <td>$firstName</td><td>имя </td></tr><tr>
          <td>string</td>
          <td>$middleName</td><td>отчество </td></tr><tr>
          <td>string</td>
          <td>$lastName</td><td>фамилия </td></tr><tr>
          <td>\\DateTime</td>
          <td>$registrationDate</td><td>дата регистрации </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  162 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'b2abb679-07c8-4a37-aea1-47b1c5a90ed9',
      'displayName' => 'news.rubric.tree',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'tree',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.tree',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода дерева новостных рубрик',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода дерева новостных рубрик',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>parentNode</td>
          <td>CmsHierarchicObject</td>
          <td></td>
          <td> родительская нода или GUID родительской ноды</td>
        </tr><tr>
          <td>depth</td>
          <td>int</td>
          <td></td>
          <td> глубина вложения</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\hmvc\\view\\CmsTreeView</td>
          <td>$tree</td><td>представление дерева </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  163 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'b2b2ae1e-a3e0-406c-a9c0-2ce7f0d31e54',
      'displayName' => 'blog.tag.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7c5a427b-f748-4620-a18b-eafbf320d789',
          'displayName' => 'blog.tag',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'tag',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.tag.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода тэга',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода тэга',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogTag</td>
          <td>string|BlogTag</td>
          <td></td>
          <td> GUID тэга</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogTag">BlogTag</a></td>
          <td>$blogTag</td><td>тэг </td></tr></tbody>
              </table><a name="BlogTag"></a><h4>BlogTag</h4><p>Теги блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$posts</td><td>список постов, относящихся к тэгу </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$rss</td><td>RSS-ленты тэга </td></tr><tr>
          <td>int</td>
          <td>$postsCount</td><td>количество постов, относящихся к тэгу </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  164 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'b2f42b8d-3842-4892-97e8-fc4f00fc428a',
      'displayName' => 'blog.draft.sendToModeration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'sendtomoderation',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.sendToModeration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки поста на модерацию',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер отправки поста на модерацию',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  165 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'b3797365-1564-473a-9fc0-9b5a8e590db8',
      'displayName' => 'blog.category.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9c739f74-beb9-4e2f-ab6c-2884985b153f',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  166 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
      'displayName' => 'blog.draft',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'draft',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  167 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'b6303a84-3912-4025-a808-8f55f68e66ce',
      'displayName' => 'blog.post.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода общей RSS-ленты',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  168 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'b6898d6d-b2a2-4adf-a499-b9b6aa1afb2b',
      'displayName' => 'blog.author.view.posts',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5b9eb30a-b741-4119-9cfb-c94f1bdfae2d',
          'displayName' => 'blog.author.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'posts',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view.posts',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по автору',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка постов по автору',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>blogAuthors</td>
          <td>array|BlogAuthor[]|BlogAuthor|null</td>
          <td></td>
          <td>авторы, список авторов блога или GUID, посты которых выводятся. Если не указаны, то посты выводятся всех авторов</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  169 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
      'displayName' => 'blog.draft',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'draft',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  170 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'ba1b4043-40ca-417f-bd8b-2a2ae980c672',
      'displayName' => 'blog.post.toDraftForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'todraftform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.toDraftForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет перемещения поста в черновики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет перемещения поста в черновики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  171 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'bb1e9a4d-c0a6-4798-ac27-5751f198f7d3',
      'displayName' => 'news.item.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'f261b858-e67e-4274-971f-f7ee618d6786',
          'displayName' => 'news.item',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'item',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода новости',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода новости',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>newsItem</td>
          <td>string|NewsItem</td>
          <td></td>
          <td> новость или GUID новости</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#NewsItem">NewsItem</a></td>
          <td>$newsItem</td><td>новость </td></tr></tbody>
              </table><a name="NewsItem"></a><h4>NewsItem</h4><p>Новость.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>DateTime</td>
          <td>$date</td><td>дата </td></tr><tr>
          <td>NewsRubric|null</td>
          <td>$rubric</td><td>рубрика, к которой относится новость </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$subjects</td><td>сюжеты, в которые входит новость </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник публикации </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  172 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'bd3f1c96-6f6a-4ed4-ac8f-4e1691f458c2',
      'displayName' => 'blog.category.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '9c739f74-beb9-4e2f-ab6c-2884985b153f',
          'displayName' => 'blog.category',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'category',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты категории',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты категории',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  173 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'c012a36d-e0a4-47fd-a784-f54a64a51977',
      'displayName' => 'blog.post.add',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'add',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.add',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  174 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'c0f066ac-5440-4610-9f0e-aad669f3c733',
      'displayName' => 'structure.menu.custom',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0fc1de36-ce89-44b0-9639-22ff4fa91011',
          'displayName' => 'structure.menu',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '63923a53-b7e8-448d-bd49-a743518c0335',
              'displayName' => 'structure',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'structure',
            ),
          ),
          'slug' => 'menu',
        ),
      ),
      'slug' => 'custom',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure.menu.custom',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода настраиваемого меню',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода настраиваемого меню',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет.</td>
        </tr><tr>
          <td>parentNode</td>
          <td>CmsHierarchicObject</td>
          <td></td>
          <td> родительская нода или GUID родительской ноды</td>
        </tr><tr>
          <td>depth</td>
          <td>int</td>
          <td></td>
          <td> глубина вложения</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>menuName</td>
          <td>string</td>
          <td></td>
          <td> имя выводимого меню.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\hmvc\\view\\CmsTreeView</td>
          <td>$tree</td><td>представление дерева </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  175 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'c233dc83-f29a-4a51-9dab-da91e17bbc1e',
      'displayName' => 'blog.category',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'category',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.category',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  176 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
      'displayName' => 'blog',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
          'displayName' => 'Виджеты',
          'branch' => NULL,
          'slug' => 'widgets',
        ),
      ),
      'slug' => 'blog',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  177 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'c3a6303a-8237-45bb-a7f7-9f94b4da343f',
      'displayName' => 'blog.post.view.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7b7a1070-e717-46f5-b523-ab6f2244b419',
          'displayName' => 'blog.post.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
              'displayName' => 'blog.post',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'post',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер для отображения поста',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер для отображения поста',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  178 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'c3b3a011-e9cf-40ef-b0f1-4dcd7c63b55e',
      'displayName' => 'blog.moderate.edit',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'edit',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.edit',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  179 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'c6e7b334-a38c-4ca6-8d39-acd41fdcd19f',
      'displayName' => 'blog.author.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  180 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'c741c6c9-9cd1-45e7-b5dc-aa2d96df6050',
      'displayName' => 'users.profile.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '537ee7eb-01a4-4197-9fba-99e93c105661',
          'displayName' => 'users.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер сохранения профиля пользователя',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер сохранения профиля пользователя',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>bool</td>
          <td>$success</td><td>флаг, указывающий на успешное сохранение изменений </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница редактирования профиля пользователя </td></tr><tr>
          <td><a href="#RegisteredUser">RegisteredUser</a></td>
          <td>$user</td><td>текущий пользователь </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table><a name="RegisteredUser"></a><h4>RegisteredUser</h4><p>Зарегистрированный пользователь.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$groups</td><td>группы, в которые входит пользователь </td></tr><tr>
          <td>string</td>
          <td>$login</td><td>логин </td></tr><tr>
          <td>string</td>
          <td>$email</td><td>e-mail </td></tr><tr>
          <td>string</td>
          <td>$firstName</td><td>имя </td></tr><tr>
          <td>string</td>
          <td>$middleName</td><td>отчество </td></tr><tr>
          <td>string</td>
          <td>$lastName</td><td>фамилия </td></tr><tr>
          <td>\\DateTime</td>
          <td>$registrationDate</td><td>дата регистрации </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  181 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'c91fcfbf-7655-4ef9-98ad-6859b8997eda',
      'displayName' => 'blog.comment.add',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
          'displayName' => 'blog.comment',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'comment',
        ),
      ),
      'slug' => 'add',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.add',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  182 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'ca03f29d-b34e-4294-bd2c-0442b806fb7e',
      'displayName' => 'blog.author.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '8697d6de-1a4c-4cb8-9a80-bc2d4bbf0e61',
          'displayName' => 'blog.author',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'author',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  183 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'ca5220a5-772c-4c3f-853c-097323332e4b',
      'displayName' => 'blog.draft.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  184 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'cd10d5a0-8a53-4031-a6b1-c69f7a15f228',
      'displayName' => 'blog.draft.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  185 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
      'displayName' => 'news',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
          'displayName' => 'Контроллеры',
          'branch' => NULL,
          'slug' => 'controllers',
        ),
      ),
      'slug' => 'news',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  186 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'd2be550d-6034-4adf-8025-e1890e6964bd',
      'displayName' => 'news.item',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'item',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  187 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'd3769047-794a-4f27-96bc-9c69cd3119df',
      'displayName' => 'blog.moderate.own.post',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '2c531737-5a3d-4c02-b720-79ad0e19b700',
          'displayName' => 'blog.moderate.own',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'own',
        ),
      ),
      'slug' => 'post',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own.post',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста требующего модерации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogPost">BlogPost</a></td>
          <td>$blogPost</td><td>пост блога </td></tr></tbody>
              </table><a name="BlogPost"></a><h4>BlogPost</h4><p>Пост блога.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$contentsRaw</td><td>необработанный контент поста </td></tr><tr>
          <td>BlogAuthor</td>
          <td>$author</td><td>автор поста </td></tr><tr>
          <td>string</td>
          <td>$announcement</td><td>анонс </td></tr><tr>
          <td>BlogCategory|null</td>
          <td>$category</td><td>категория поста </td></tr><tr>
          <td>IManyToManyObjectSet</td>
          <td>$tags</td><td>теги, к которым относится пост </td></tr><tr>
          <td>DateTime</td>
          <td>$publishTime</td><td>дата публикации поста </td></tr><tr>
          <td>string</td>
          <td>$publishStatus</td><td>статус публикации поста </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество комментариев к посту </td></tr><tr>
          <td>string</td>
          <td>$oldUrl</td><td>старый URL поста </td></tr><tr>
          <td>string</td>
          <td>$source</td><td>источник поста </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  188 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'd534fd83-0f12-4a0d-9853-583b9181a948',
      'displayName' => 'Главная',
      'branch' => NULL,
      'slug' => 'main',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Главная',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
    ),
  ),
  189 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'd5d519c4-17f3-4d51-b36c-4892d7e639e6',
      'displayName' => 'blog.moderate.all',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'all',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  190 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'd5f8f9b6-9141-4ea0-beed-695349bf4926',
      'displayName' => 'users.restoration',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'restoration',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.restoration',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  191 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'd7b1fbc6-5b8c-4aa6-9b6d-176a13873fbc',
      'displayName' => 'blog.moderate.edit.editLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5e86b85f-13e8-4d6e-9314-770994c03bc6',
          'displayName' => 'blog.moderate.edit',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'edit',
        ),
      ),
      'slug' => 'editlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.edit.editLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на редактирование поста, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на редактирование поста, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID редактируемого поста, требующего модерации</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  192 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
      'displayName' => 'Виджеты',
      'branch' => NULL,
      'slug' => 'widgets',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджеты',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'updated' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:26:17";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'editor' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджеты',
      ),
      'metaDescription#ru-RU' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'metaKeywords#ru-RU' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'contents#ru-RU' => 
      array (
        0 => 'string',
        1 => '<p>Виджеты служат для вывода контентных блоков на сайте, дополняющих основное содержание страницы, например, для вывода меню или формы авторизации. Использование виджетов в шаблонах позволяет изменять данные без измений кода шаблонов.</p>

<p>Виджеты условно можно разделить на несколько групп:</p>

<ul>
	<li>виджеты вывода форм,</li>
	<li>виджеты вывода ссылок,</li>
	<li>виджеты вывода списков объектов,</li>
	<li>виджеты вывода древовидных структур,</li>
	<li>виджеты отображения конкретных объектов.</li>
</ul>

<p>Виджеты вывода списков обладают разнообразными возможностями фильтрации и сортировки, кроме того они позволяют загружать только необходимые для отображения данные, экономя ресурсы и время.</p>

<p>Виджеты вывода ссылок позволяют не &quot;зашивать&quot; в шаблонах ссылки на системные страницы, что позволяет безболезненно менять их адреса.</p>

<p>Виджеты вывода форм всегда отобразят форму исходя из ее актуальной конфигурации.</p>

<h3>Вызов виджета для php-шаблонизатора</h3>

<pre>
 &lt;?= $this-&gt;widget(&#39;structure.menu.auto&#39;, [&#39;depth&#39; =&gt; 1, &#39;template&#39; =&gt; &#39;auto&#39;]) ?&gt;
</pre>

<h3>Вызов виджета для twig-шаблонизатора</h3>

<pre>
{{ widget(&#39;structure.menu.auto&#39;, {&#39;depth&#39;: 1, &#39;template&#39;: &#39;auto&#39;})|raw }}</pre>

<h3>Вызов виджета для xslt-шаблонизатора</h3>

<pre>
&lt;xsl:apply-templates select=&quot;document(&#39;widget://structure.menu.auto?depth=1&#39;)/result&quot;/&gt;</pre>',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
    ),
  ),
  193 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'd8b5f5a6-8127-48b8-8393-92997592dcd5',
      'displayName' => 'blog.author.profile.editLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0a9564bc-a0d6-4777-8284-3580e5dd80e0',
          'displayName' => 'blog.author.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'editlink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.profile.editLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование профиля автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода URL на редактирование профиля автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  194 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
      'displayName' => 'users.profile',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'profile',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  195 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'dbe3b517-ebb5-4f89-96e4-e140474dfeaa',
      'displayName' => 'users.profile.password',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'db52cf05-c365-45f3-a7c2-7d9777997fdc',
          'displayName' => 'users.profile',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'profile',
        ),
      ),
      'slug' => 'password',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.profile.password',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  196 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'dd843139-8f11-498e-82ad-b26456823c01',
      'displayName' => 'blog.moderate.toDraftForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'afe4e54d-6776-4a6d-86aa-f7c0f82e439c',
          'displayName' => 'blog.moderate',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'moderate',
        ),
      ),
      'slug' => 'todraftform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.toDraftForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет переноса поста с модерации в черновики',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет переноса поста с модерации в черновики',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr><tr>
          <td>blogPost</td>
          <td>string|BlogPost</td>
          <td></td>
          <td> пост или GUID поста на модерации, необходимого перенесте в черновики</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  197 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'dfa5701d-5d4c-4473-8d9b-a0621d5f9b50',
      'displayName' => 'blog.comment.add.add',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '6cf6a370-0bd2-4e07-bc7d-7fc259175673',
          'displayName' => 'blog.comment.add',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '0d4dca62-1e8a-41a1-a009-227c283a3e12',
              'displayName' => 'blog.comment',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'comment',
            ),
          ),
          'slug' => 'add',
        ),
      ),
      'slug' => 'add',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment.add.add',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер добавления комментария',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер добавления комментария',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr><tr>
          <td>array</td>
          <td>$errors</td><td>список ошибок, возникших при обработке данных формы (не ошибки валидации). Не передается, если ошибок не было </td></tr><tr>
          <td>string|bool</td>
          <td>$added</td><td>флаг, указывающий на статус добавленного комментария: published, если комментарий был добававлен и опубликован, moderate - если был добавлен и отправлен на модерацию, false, если комментарий не был добавлен </td></tr><tr>
          <td><a href="#SystemPage">SystemPage</a></td>
          <td>$page</td><td>текущая страница добавления комментария </td></tr></tbody>
              </table><a name="SystemPage"></a><h4>SystemPage</h4><p>Системная страница UMI.CMS.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>bool</td>
          <td>$skipInBreadcrumbs</td><td>пропускать ли системную страницу при выводе хлебных крошек </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  198 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'e05d9cd3-7fe6-428e-a215-8f3db8d29f93',
      'displayName' => 'news.subject',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '536cf214-548c-4573-96c1-07f53282f765',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'subject',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  199 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'e18a5327-3842-4e5e-aff3-9bfef44d3b2a',
      'displayName' => 'news.rubric.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостных рубрик',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка новостных рубрик',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr><tr>
          <td>parentRubric</td>
          <td>string|null|NewsRubric</td>
          <td></td>
          <td> новостная рубрика или GUID, из которой выводятся дочерние рубрики. Если не указан, выводятся все корневые рубрики.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  200 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'e1a445b5-e762-4ff9-98f6-d35ffa2e4144',
      'displayName' => 'blog.moderate.all.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '28d69521-2101-4bc3-8dcb-4e4656674ec5',
          'displayName' => 'blog.moderate.all',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'all',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.all.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода поста блога, требующего модерации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода поста блога, требующего модерации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  201 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'e3187a27-2840-4bdf-aaf4-4943ba79526a',
      'displayName' => 'news.rubric.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '515a3b57-7513-456d-9756-ac320a343506',
          'displayName' => 'news.rubric',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'rubric',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц компонента',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  202 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'e4473d19-6e86-40e9-803d-e5ded63e8157',
      'displayName' => 'news.subject.rssLink',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e05d9cd3-7fe6-428e-a215-8f3db8d29f93',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '536cf214-548c-4573-96c1-07f53282f765',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'rsslink',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.rssLink',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на RSS-ленту по сюжету',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода ссылки на RSS-ленту по сюжету',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>absolute</td>
          <td>bool</td>
          <td></td>
          <td> генерировать ли абсолютный URL для ссылки</td>
        </tr><tr>
          <td>subject</td>
          <td>string|NewsSubject</td>
          <td></td>
          <td> новостной сюжет или GUID сюжета, по которым формируется RSS-лента.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>string</td>
          <td>$url</td><td>URL ссылки </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  203 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'e46fcb30-2555-4364-932d-b57a9116b019',
      'displayName' => 'search.form',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0035d042-0d55-462e-99f8-20904599b568',
          'displayName' => 'search',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'search',
        ),
      ),
      'slug' => 'form',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'search.form',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выводящий форму поиска',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет, выводящий форму поиска',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы поиска </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  204 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'e638546b-6a0a-48fe-a83e-afc09d6669e2',
      'displayName' => 'users.authorization.loginForm',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '58c35417-0b4c-4c77-8ebb-9dcfb368a55b',
          'displayName' => 'users.authorization',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '82c11e27-8b5e-4d0a-9444-3055c57633a1',
              'displayName' => 'users',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'users',
            ),
          ),
          'slug' => 'authorization',
        ),
      ),
      'slug' => 'loginform',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization.loginForm',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы авторизации',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода формы авторизации',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>redirectUrl</td>
          <td>string</td>
          <td></td>
          <td> URL для редиректа после успешной обработки формы</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umi\\form\\FormEntityView</td>
          <td>$form</td><td>представление формы </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  205 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'e663ba29-d7d3-4a18-9a05-84532791e085',
      'displayName' => 'news.rubric',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '536cf214-548c-4573-96c1-07f53282f765',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'rubric',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.rubric',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  206 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'e6693b4a-d8d7-4192-b611-e57b1e43fa0e',
      'displayName' => 'blog.draft.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
          'displayName' => 'blog.draft',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'draft',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  207 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'ea63873e-44f7-4375-b4f9-11ba213fd969',
      'displayName' => 'news.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  208 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'efd0cf61-7f28-49b3-a253-3408ce105c0a',
      'displayName' => 'blog.post.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5d23b731-f770-445d-803e-3bd97b071bf2',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  209 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'f14593c0-af66-4363-9700-212432dd3bae',
      'displayName' => 'blog.draft.view.page',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cd10d5a0-8a53-4031-a6b1-c69f7a15f228',
          'displayName' => 'blog.draft.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'page',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view.page',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода черновика блога',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода черновика блога',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>umicms\\orm\\object\\ICmsPage</td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'page',
      ),
    ),
  ),
  210 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'f261b858-e67e-4274-971f-f7ee618d6786',
      'displayName' => 'news.item',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '536cf214-548c-4573-96c1-07f53282f765',
          'displayName' => 'news',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'news',
        ),
      ),
      'slug' => 'item',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.item',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  211 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'f610b0f2-5805-4c8b-abb6-a7b3d9348d23',
      'displayName' => 'users.authorization',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '0c2a4f46-d9a7-41dc-9e2b-0c11a3c5e555',
          'displayName' => 'users',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
              'displayName' => 'Контроллеры',
              'branch' => NULL,
              'slug' => 'controllers',
            ),
          ),
          'slug' => 'users',
        ),
      ),
      'slug' => 'authorization',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'users.authorization',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  212 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'f8a47838-39de-4e01-81e6-a3ae22fa0941',
      'displayName' => 'blog.author.view.author',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '5b9eb30a-b741-4119-9cfb-c94f1bdfae2d',
          'displayName' => 'blog.author.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'a51ed22f-4728-4197-bd81-47dbd2294717',
              'displayName' => 'blog.author',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'author',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'author',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.author.view.author',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода информации об авторе',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет вывода информации об авторе',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>blogAuthor</td>
          <td>string|BlogAuthor</td>
          <td></td>
          <td> GUID автора</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#BlogAuthor">BlogAuthor</a></td>
          <td>$blogAuthor</td><td>автор </td></tr></tbody>
              </table><a name="BlogAuthor"></a><h4>BlogAuthor</h4><p>Автор поста.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последней часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>RegisteredUser</td>
          <td>$profile</td><td>профиль автора </td></tr><tr>
          <td>int</td>
          <td>$postsCount</td><td>количество постов автора </td></tr><tr>
          <td>int</td>
          <td>$commentsCount</td><td>количество постов автора </td></tr><tr>
          <td>DateTime</td>
          <td>$lastActivity</td><td>дата последней активности </td></tr><tr>
          <td>IObjectSet</td>
          <td>$posts</td><td>посты автора </td></tr></tbody>
          </table>',
      ),
    ),
  ),
  213 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.widget',
      'guid' => 'f9621094-abc8-4caa-976c-d08316d59779',
      'displayName' => 'blog.draft.view.list',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'e6693b4a-d8d7-4192-b611-e57b1e43fa0e',
          'displayName' => 'blog.draft.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b7f54013-c195-41be-8263-255bc868b54e',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                      'displayName' => 'Виджеты',
                      'branch' => NULL,
                      'slug' => 'widgets',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'list',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view.list',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка черновиков текущего автора',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Виджет для вывода списка черновиков текущего автора',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'parameters' => 
      array (
        0 => 'string',
        1 => '<h3>Параметры вызова виджета</h3><table class="table">
          <thead>
            <tr>
              <th>Параметр</th>
              <th>Тип</th>
              <th>Значение</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>forbiddenTemplate</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет в случае отсутствия доступа к нему.</td>
        </tr><tr>
          <td>template</td>
          <td>string</td>
          <td></td>
          <td> имя шаблона, по которому выводится виджет</td>
        </tr><tr>
          <td>limit</td>
          <td>int</td>
          <td></td>
          <td> максимальное количество выводимых элементов. Если не указано, выводятся все элементы.</td>
        </tr><tr>
          <td>offset</td>
          <td>int</td>
          <td></td>
          <td> сдвиг. Игнорируется при заданных настройках вывода постраничной навигации</td>
        </tr><tr>
          <td>options</td>
          <td>array</td>
          <td></td>
          <td> настройки селектора</td>
        </tr><tr>
          <td>pagination</td>
          <td>array</td>
          <td></td>
          <td> настройки вывода постраничной навигации в формате [ \'pageParam\' => $pageParam, \'type\' => $type, \'pagesCount\' => $pagesCount ], где $pageParam имя GET-параметра, из которого берется текущая страница навигации, $type тип постраничной навигации (all, sliding, jumping, elastic), $pagesCount количество страниц отображаемых в ряду Если не указано, постраничная навигация не будет сформирована.</td>
        </tr><tr>
          <td>fullyLoad</td>
          <td>bool</td>
          <td></td>
          <td> признак необходимости загружать все свойства объектов списка. Список полей для загрузки, занный опциями, при значении true игнорируется.</td>
        </tr></tbody>
              </table>',
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td>array|umi\\orm\\selector\\ISelector</td>
          <td>$list</td><td>список объектов </td></tr><tr>
          <td>umicms\\pagination\\CmsPaginator</td>
          <td>$paginator</td><td>постраничная навигация, если была сформирована </td></tr></tbody>
              </table>',
      ),
    ),
  ),
  214 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
      'displayName' => 'blog',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
          'displayName' => 'Контроллеры',
          'branch' => NULL,
          'slug' => 'controllers',
        ),
      ),
      'slug' => 'blog',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  215 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'fb775d9a-23ac-4c03-af78-ae325a534f45',
      'displayName' => 'blog.reject.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '09d280ca-fd17-4687-a7dd-7faf76962e99',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  216 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'fbee1a52-6fef-416c-9f30-957d058655ff',
      'displayName' => 'blog.moderate.own.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '2c31411b-7e56-4f3e-93ab-f18ab786bd20',
          'displayName' => 'blog.moderate.own',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => '494dbe93-d587-46a2-a18a-fa7bdfd62f42',
              'displayName' => 'blog.moderate',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'moderate',
            ),
          ),
          'slug' => 'own',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.moderate.own.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  217 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'fc2b5b6f-fc3c-47e0-a856-5a3254501f7f',
      'displayName' => 'blog.draft.view.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'cd10d5a0-8a53-4031-a6b1-c69f7a15f228',
          'displayName' => 'blog.draft.view',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'b4fcfe04-2981-418d-8c2f-e2d12e98021c',
              'displayName' => 'blog.draft',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
                  'displayName' => 'blog',
                  'branch' => 
                  array (
                    'meta' => 
                    array (
                      'collection' => 'structure',
                      'type' => 'static',
                      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                      'displayName' => 'Контроллеры',
                      'branch' => NULL,
                      'slug' => 'controllers',
                    ),
                  ),
                  'slug' => 'blog',
                ),
              ),
              'slug' => 'draft',
            ),
          ),
          'slug' => 'view',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.draft.view.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  218 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
      'displayName' => 'Контроллеры',
      'branch' => NULL,
      'slug' => 'controllers',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллеры',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллеры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
    ),
  ),
  219 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'fdce2a24-1fe4-4868-8b49-4af00799e38b',
      'displayName' => 'news.subject.rss',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '71386eb7-06ad-4096-bd59-2b9e6ebbdbf0',
          'displayName' => 'news.subject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'cff4d557-f007-48a0-8bff-024950b88a03',
              'displayName' => 'news',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'news',
            ),
          ),
          'slug' => 'subject',
        ),
      ),
      'slug' => 'rss',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'news.subject.rss',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты сюжета',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода RSS-ленты сюжета',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '',
      ),
    ),
  ),
  220 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'fdd02e06-672f-4631-93b2-5c1bc0332966',
      'displayName' => 'blog.comment',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
          'displayName' => 'blog',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
              'displayName' => 'Виджеты',
              'branch' => NULL,
              'slug' => 'widgets',
            ),
          ),
          'slug' => 'blog',
        ),
      ),
      'slug' => 'comment',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.comment',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  221 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'fe0082b8-15db-4ce5-9659-3472dc97a315',
      'displayName' => 'blog.reject.view',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '7944a5f4-d77b-4ae0-b36b-6fc049dbf30b',
          'displayName' => 'blog.reject',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'c396c995-cd0a-4d6f-ae0b-5eb15dc35aac',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'd7dda227-cac7-474d-ab0d-d361d0bc16a3',
                  'displayName' => 'Виджеты',
                  'branch' => NULL,
                  'slug' => 'widgets',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'reject',
        ),
      ),
      'slug' => 'view',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.reject.view',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
  222 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static.controller',
      'guid' => 'fe76ad0b-15dd-4d74-9a46-1c02db78c405',
      'displayName' => 'blog.post.index',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => '1dbe65b6-0eae-4e6c-b64f-814b792bdf77',
          'displayName' => 'blog.post',
          'branch' => 
          array (
            'meta' => 
            array (
              'collection' => 'structure',
              'type' => 'static',
              'guid' => 'fa0e9b8d-79b8-4ae5-89f0-36dbea625e75',
              'displayName' => 'blog',
              'branch' => 
              array (
                'meta' => 
                array (
                  'collection' => 'structure',
                  'type' => 'static',
                  'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
                  'displayName' => 'Контроллеры',
                  'branch' => NULL,
                  'slug' => 'controllers',
                ),
              ),
              'slug' => 'blog',
            ),
          ),
          'slug' => 'post',
        ),
      ),
      'slug' => 'index',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'blog.post.index',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'metaTitle#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'h1#ru-RU' => 
      array (
        0 => 'string',
        1 => 'Контроллер вывода страниц структуры',
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 0,
      ),
      'description' => 
      array (
        0 => 'string',
        1 => '',
      ),
      'returnValue' => 
      array (
        0 => 'string',
        1 => '<h3>Переменные, доступные в шаблоне</h3><table class="table">
          <thead>
            <tr>
              <th>Тип</th>
              <th>Параметр</th>
              <th>Описание</th>
            </tr>
          </thead>
          <tbody><tr>
          <td><a href="#StructureElement">StructureElement</a></td>
          <td>$page</td><td>текущая страница </td></tr></tbody>
              </table><a name="StructureElement"></a><h4>StructureElement</h4><p>Базовый элемент структуры.</p><table class="table">
      <thead>
        <tr>
          <th>Тип</th>
          <th>Параметр</th>
          <th>Описание</th>
        </tr>
      </thead>
      <tbody><tr>
          <td>string</td>
          <td>$metaTitle</td><td>заголовок окна браузера </td></tr><tr>
          <td>string</td>
          <td>$metaKeywords</td><td>ключевые слова </td></tr><tr>
          <td>string</td>
          <td>$metaDescription</td><td>описание страницы </td></tr><tr>
          <td>string</td>
          <td>$contents</td><td>содержимое страницы </td></tr><tr>
          <td>string</td>
          <td>$h1</td><td>заголовок страницы </td></tr><tr>
          <td>string</td>
          <td>$slug</td><td>последняя часть ЧПУ </td></tr><tr>
          <td>Layout|null</td>
          <td>$layout</td><td>шаблон для вывода </td></tr><tr>
          <td>bool</td>
          <td>$locked</td><td>состояние заблокированности </td></tr><tr>
          <td>string</td>
          <td>$guid</td><td>глобальный уникальный идентификатор (GUID) </td></tr><tr>
          <td>IObjectType</td>
          <td>$type</td><td>тип </td></tr><tr>
          <td>string</td>
          <td>$displayName</td><td>выводимое в интерфейсах имя </td></tr><tr>
          <td>int</td>
          <td>$version</td><td>версия </td></tr><tr>
          <td>DateTime</td>
          <td>$created</td><td>время создания объекта </td></tr><tr>
          <td>DateTime</td>
          <td>$updated</td><td>время обновления объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$owner</td><td>владелец объекта </td></tr><tr>
          <td>BaseUser</td>
          <td>$editor</td><td>последний редактор объекта </td></tr><tr>
          <td>bool</td>
          <td>$trashed</td><td>состояние "в корзине" </td></tr><tr>
          <td>bool</td>
          <td>$active</td><td>состояние активности на сайте </td></tr><tr>
          <td>int</td>
          <td>$level</td><td>уровень вложенности в иерархии </td></tr><tr>
          <td>int</td>
          <td>$order</td><td>порядок следования в иерархии </td></tr><tr>
          <td>CmsHierarchicObject|null</td>
          <td>$parent</td><td>родительский элемент </td></tr><tr>
          <td>int</td>
          <td>$childCount</td><td>количество дочерних элементов </td></tr><tr>
          <td>IObjectSet</td>
          <td>$children</td><td>дочерние элементы </td></tr><tr>
          <td>string</td>
          <td>$componentPath</td><td>путь до компонента-обработчика </td></tr><tr>
          <td>string</td>
          <td>$componentName</td><td>имя компонента-обработчика </td></tr><tr>
          <td>bool</td>
          <td>$inMenu</td><td>признак включения в меню </td></tr><tr>
          <td>int</td>
          <td>$submenuState</td><td>состояние дочернего меню </td></tr></tbody>
          </table>',
      ),
      'templateName' => 
      array (
        0 => 'string',
        1 => 'index',
      ),
    ),
  ),
  223 => 
  array (
    'meta' => 
    array (
      'collection' => 'structure',
      'type' => 'static',
      'guid' => 'fee13476-00be-4bd4-a519-88886b2af20e',
      'displayName' => 'structure',
      'branch' => 
      array (
        'meta' => 
        array (
          'collection' => 'structure',
          'type' => 'static',
          'guid' => 'fda552a8-846a-431d-87bf-ed719cdd884b',
          'displayName' => 'Контроллеры',
          'branch' => NULL,
          'slug' => 'controllers',
        ),
      ),
      'slug' => 'structure',
    ),
    'data' => 
    array (
      'displayName#ru-RU' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'created' => 
      array (
        0 => 'object',
        1 => 'O:8:"DateTime":3:{s:4:"date";s:19:"2014-07-17 19:23:45";s:13:"timezone_type";i:3;s:8:"timezone";s:13:"Europe/Moscow";}',
      ),
      'owner' => 
      array (
        0 => 'relation',
        1 => 
        array (
          'meta' => 
          array (
            'collection' => 'user',
            'type' => 'registered.supervisor',
            'guid' => '68347a1d-c6ea-49c0-9ec3-b7406e42b01e',
            'displayName' => 'Супервайзер',
          ),
        ),
      ),
      'active#ru-RU' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'active#en-US' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'trashed' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'locked' => 
      array (
        0 => 'boolean',
        1 => false,
      ),
      'componentName' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'componentPath' => 
      array (
        0 => 'string',
        1 => 'structure',
      ),
      'inMenu' => 
      array (
        0 => 'boolean',
        1 => true,
      ),
      'submenuState' => 
      array (
        0 => 'integer',
        1 => 2,
      ),
    ),
  ),
);