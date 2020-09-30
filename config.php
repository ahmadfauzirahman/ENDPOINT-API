<?php

/**
 * Created by PhpStorm.
 * User: fauzizone
 * Date: 11/01/20
 * Time: 8:56
 */

return [
    'id' => 'Api RSUD ARIFIN ACHMAD',
    // the basePath of the application will be the `rsud-app` directory
    'basePath' => __DIR__,
    // this is where the application will find all controllers
    'controllerNamespace' => 'rsud\controllers',
    // set an alias to enable autoloading of classes from the 'micro' namespace
    'aliases' => [
        '@rsud' => __DIR__,
    ],
    'components' => [
        'request' => [
            'baseUrl' => str_replace("/web", "", (new \yii\web\Request())->baseUrl),
            'cookieValidationKey' => 'sso',

        ],
        // ...
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=192.168.254.70;port=5432;dbname=simrs',
            'username' => 'postgres',
            'password' => '1satu2dua',
            'charset' => 'utf8',

        ],
        // 'db' => [
        //     'class' => 'yii\db\Connection',
        //     'dsn' => 'pgsql:host=localhost;port=5432;dbname=simrs',
        //     'username' => 'postgres',
        //     'password' => 'postgres',
        //     'charset' => 'utf8',

        // ],
        'dbSso' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'pgsql:host=localhost;port=5432;dbname=rsud_id',
            //    'dsn' => 'pgsql:host=192.168.254.21;port=5432;dbname=simrsfarmasiv2',

            'username' => 'postgres',
            'password' => 'postgres',
            'charset' => 'utf8',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            //            'suffix' => '.html',
            'rules' => [
                '' => 'site/index',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',                 // only for integer id
                '<controller:\w+>/<action:\w+[-\w]+\w>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+[-\w]+\w>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>s' => '<controller>/index',
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
        ],
    ],
];
