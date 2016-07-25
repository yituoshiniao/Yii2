<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'defaultRoute' => 'site/index',

    'name' => 'Yii2 前端应用',
    'timeZone' =>'Asia/Shanghai',
    'charset'  =>'utf-8',
    'language' =>'zh-CN',
    'layout'   =>'main',

    'components' => [
       'urlManager' => [
            'enablePrettyUrl' => true, //启用路由美化功能
            'showScriptName' => false, // false 隐藏index.php; true 显示index.php
            'enableStrictParsing' => false,  //不启用严格解析
            // 'suffix'=>'.html', //伪静态
            'rules' => [
                'user/<action:\w+>'=>'user/default/<action>',
                // ['class' => 'yii\rest\UrlRule', 'controller' => ['BusinessInfo','test']],
                 //'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
           ],
        ],

/*        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'abcdefg',
            'enableCsrfValidation'   => true,   //开启 CSRF的验证，默认true
            // 'enableCsrfCookie'       as=> true,  //true 从cookie中 验证crsf ，false 从session中验证,默认true
            'enableCookieValidation' => true,   //Cookie验证默认true
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
                'text/json' => 'yii\web\JsonParser',
            ],
        ],*/

        'cache' => [
            'class' => 'yii\caching\FileCache',
            'directoryLevel'=>2, //缓存层级深度
        ],
        'fileCache' => [
            'class' => 'yii\caching\FileCache',
            'directoryLevel'=>2, //缓存层级深度
        ],
        'memcache' => [
            'class' => 'yii\caching\MemCache',
            'servers' => [
                [
                    'host' => 'localhost',
                    'port' => 11211,
                    'weight' => 60,
                ]
            ],
        ],
        'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '172.16.60.12',
            'port' => 6379,
            'password' => 'cwkj0987',
            'database' => 0,
        ],
        
        'mongodb' => [
            'class' => '\yii\mongodb\Connection',
            'dsn' => 'mongodb://172.16.60.12:27017/rrkd_shop',
        ],

    ],
];
