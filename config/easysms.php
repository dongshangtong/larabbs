<?php

return [
    'timeout' => 5.0,

    'default' =>[
        'strategy' =>rue\EasySms\Strategies\OrderStrategy::class,

        'gateways' =>[
            'yunpian',
        ],

    ],

    'gateways' => [
            'errorlog' =>[
                'file' =>'/tmp/east-sms.log',
            ],

            'yunpian' =>[
            'api_key' => env('48f33744d577db4fff0ba9792feb23d8') ,
            ],

    ],


];
