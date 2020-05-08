<?php

use yii\bootstrap4\LinkPager as Bootstrap4LinkPager;
use yii\widgets\LinkPager;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'blog',
    'name' => getenv("APP_NAME"),
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'container' => [
        'definitions' => [
            LinkPager::class => Bootstrap4LinkPager::class,
            'yii\data\Pagination' => [
                'pageSize' => 10
            ]
        ]
    ],
    'language' => 'en',
    'modules' => [
        'api' => [
            'class' => 'app\modules\api\Module',
        ],
        'admin' => [
            'class' => 'mdm\admin\Module',
            'layout' => '@app/modules/superadmin/views/layouts/main',
            'defaultRoute' => '/admin/default',
            'viewPath' => '@app/modules/superadmin/views/mdm',
            'params' => [
                'description' => 'Auth manager for Yii2 (RBAC Manager). 
                                   Dokumentasi bisa dilihat di <a href="https://github.com/mdmsoft/yii2-admin"> Doc </a>'
            ]
        ],

        'gridview' => [
            'class' => '\kartik\grid\Module'
        ],
        'mimin' => [
            'class' => '\hscstudio\mimin\Module',
            'layout' => '@app/modules/superadmin/views/layouts/main',
            'controllerMap' => [
                'user' => 'app\modules\superadmin\controllers\UserController',
                'route' => 'app\modules\superadmin\controllers\RouteController',
                'role' => 'app\modules\superadmin\controllers\RoleController'
            ],
            'viewPath' => '@app/modules/superadmin/views/mimin',
            'defaultRoute' => '/mimin/route',
            'params' => [
                'description' => 'Simple RBAC Manager for Yii2 (minify of yii2-admin). Dokumentasi bisa dilihat di <a href="https://github.com/hscstudio/yii2-mimin"> Doc </a> '
            ]
        ],
        'redactor' => 'yii\redactor\RedactorModule',
        'superadmin' => [
            'class' => 'app\modules\superadmin\Module',
            'layout' => '@app/modules/superadmin/views/layouts/main',
            'defaultRoute' => '/superadmin/default',
            'params' => [
                'description' => 'Just a dumb web developer.<br> Kontak Saya di: <a href="https://github.com/ahmadfadlydziljalal">My Github</a>'
            ]
        ],
    ],
    'components' => [
        'jwt' => [
            'class' => \bizley\jwt\Jwt::class,
            'key' => getenv('JWT_KEY') // Secret key string or path to the public key file
        ],
        'assetManager' => [
            'bundles' => [
                'kartik\form\ActiveFormAsset' => [
                    'bsDependencyEnabled' => false // do not load bootstrap assets for a specific asset bundle
                ],
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@app/themes/AdminLTE'],
                'baseUrl' => '@web/../themes/AdminLTE',
            ],
        ],
        'db' => $db,
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // only support DbManager
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => false,
        ],
        /*'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
        ],*/
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'VnRxKwxSJaaMdpXDHLg4cALqhit6ojof',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => 'site/index',
                'about' => 'site/about',
                'contact' => 'site/contact',
                'login' => 'site/login',
                'dashboard' => 'site/dashboard',

                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => [
                        'v1/users' => 'api/v1/user'
                    ],
                ],

                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => [
                        'v1/auth' => 'api/v1/auth'
                    ],
                    'patterns' => [
                        'POST' => 'login',
                        'GET' => 'token',
                    ],
                    'pluralize' => false,
                ],
            ],
        ],
    ],
   
    'as access' => [
        // 'class' => '\hscstudio\mimin\components\AccessControl',
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            // add wildcard allowed action here!
            // 'admin/*',
            // 'mimin/*', // only in dev mode
            'site/*',
            'api/*'
        ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        // 'allowedIPs' => ['127.0.0.1', '::1'],
        'allowedIPs' => ['*'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
         'allowedIPs' => ['*'],
    ];
}

return $config;
