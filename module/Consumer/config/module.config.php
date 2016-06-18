<?php

return [
    'console' => [
        'router' => [
            'routes' => [
                'my-first-route' => [
                    'type'    => 'simple',
                    'options' => [
                        'route'    => 'foo bar',
                        'defaults' => [
                            'controller' => Consumer\Controller\ConsumerController::class,
                            'action'     => 'helloWorld',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'invokables' => [
            Consumer\Controller\ConsumerController::class => Consumer\Controller\ConsumerController::class
        ]
    ]
];
