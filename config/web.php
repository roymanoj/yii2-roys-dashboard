<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name'=>'ROYS Basic Dashboard',
    'timeZone' => 'Asia/Calcutta',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'enableCookieValidation' => true,
            'enableCsrfValidation' => true,
            'cookieValidationKey' => 'put your secret key here',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
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
        'db' => $db,
        /* */
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],


        'i18n' => [
        'translations' => [
            'app*' => [
                'class' => 'yii\i18n\PhpMessageSource',
                //'basePath' => '@app/messages',
                //'sourceLanguage' => 'en-US',
                'fileMap' => [
                    'app' => 'app.php',
                    'app/error' => 'error.php',
                ],
            ],
        ],
    ],

        's3' => [
            'class' => 'bpsys\yii2\aws\s3\Service',
            'credentials' => [ // Aws\Credentials\CredentialsInterface|array|callable
                'key' => 'AKIARYVNOTN3DNKFPJEU',
                'secret' => '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',
            ],
            'region' => 'ap-south-1',
            'defaultBucket' => 'tipl-dashboard',
            'defaultAcl' => 'public-read',
           // 'defaultPresignedExpiration' => '+1 hour',
        ],

               

            'aws' => [
         
                'class' => 'app\components\Aws',
    
              ],
          

       /* 'view' => [
            'theme' => [
                'pathMap' => [
                   '@app/views' => '@vendor/hail812/yii2-adminlte3/src/views'
                ],
            ],
       ],
        */

      /*  'view' => [
            'class' => 'yii\web\View',
            'theme' => [
              'class' => 'yii\base\Theme',
              'pathMap' => ['@app/views' => 'themes/dirt'],
              'baseUrl'   => 'themes/dirt'
            ]
        ]*/

       /*
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/sbclean',
                'baseUrl' => '@web/themes/sbclean',
                'pathMap' => [
                    '@app/views' => '@app/themes/sbclean',
                ],
            ],
        ], 


        'theme' => [
            'basePath' => '@app/themes/sbclean',
            'baseUrl' => '@web',
        ],
        */

     /*   'assetManager' => [
            'bundles' => [
                'yidas\yii\fontawesome\FontawesomeAsset' => [
                    'cdn' => true,
                    'cdnCSS' => ['https://use.fontawesome.com/releases/v5.2.0/css/all.css'],
                ],

            ],
        ],
        
*/

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    
}



return $config;
