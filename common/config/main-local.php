<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '123456',
            'charset' => 'utf8',
            'tablePrefix'=>"yii_", //表前缀

            // Yii2缓存表结构配置
            'emulatePrepare'      => true,          //配置后，将会记录PDO传参查询变量值
            'enableSchemaCache'   => YII_DEBUG,     //开启表结构缓存
            'schemaCacheDuration' => 3600,          // 开启表结构缓存（单位秒），提高性能
            'enableQueryCache'    => true,          //开启查询缓存
            'schemaCache'         => 'fileCache',   //表结构缓存使用的缓存组件，默认是 cache


        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false, //false 发送邮件，true只是生成邮件 在runtime下

            //发送邮件配置
            'transport' => [
                'class' => 'Swift_SmtpTransport',

                'host' => 'smtp.163.com',
                'username' => 'smgano@163.com',
                'password' => 'wsganquanl0ng', //注意163邮箱这里 输入的是邮箱授权码不是密码,其他邮箱也可能是授权码

                'port' => '465',
                'encryption' => 'ssl', //tls 端口25; ssl 端口465
            ],

        ],
    ],
];
