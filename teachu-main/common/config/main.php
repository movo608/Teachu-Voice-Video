<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'blog' => [
            'class' => akiraz2\blog\Module::class,
            'urlManager' => 'urlManager',// 'urlManager' by default
            'imgFilePath' => '@frontend/web/img/blog',
            'imgFileUrl' => '/teachu-main/frontend/web/img/blog',                   
        ],
    ],
    'timeZone' => 'Europe/Moscow', //time zone affect the formatter datetime format
    'components' => [
        'RatingCalculatorComponent' => [
            'class' => 'common\components\RatingCalculatorComponent'
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'formatter' => [ //for the showing of date datetime
            'dateFormat' => 'yyyy-MM-dd',
            'datetimeFormat' => 'yyyy-MM-dd HH:mm:ss',
            'decimalSeparator' => '.',
            'thousandSeparator' => ' ',
            'currencyCode' => 'EUR',
        ],
    ],
];
