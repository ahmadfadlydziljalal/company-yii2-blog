<?php

// ini_set('error_reporting', E_ERROR);
// register_shutdown_function("fatal_handler");
// function fatal_handler() {
//     $error = error_get_last();
//     echo("<pre>");
//     print_r($error);
// }

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

$config = require(__DIR__ . '/../config/web.php');

(new yii\web\Application($config))->run();


?>



