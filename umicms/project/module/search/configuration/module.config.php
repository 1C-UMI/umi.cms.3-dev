<?php

return [
    'api' => [
        'umicms\project\module\search\api\SearchIndexApi' => [
            'collectionsMap' => [
                'newsItem' => ['properties' => ['displayName', 'announcement']],
                'newsSubject' => ['properties' => ['displayName', 'h1', 'contents']],
                'newsRubric' => ['properties' => ['displayName', 'h1', 'contents']],
                'blogCategory' => ['properties' => ['displayName', 'h1', 'contents']],
                'blogComment' => ['properties' => ['contents']],
                'blogPost' => ['properties' => ['displayName', 'h1', 'announcement', 'contents']],
            ]
        ],
        'umicms\project\module\search\api\SearchApi' => [
            'minimumPhraseLength' => 3,
            'minimumWordRootLength' => 3,
        ]
    ]
];