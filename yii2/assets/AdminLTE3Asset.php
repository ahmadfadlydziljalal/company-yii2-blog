<?php


namespace app\assets;

use yii\web\AssetBundle;

class AdminLTE3Asset extends AssetBundle {
    public $sourcePath = '@app/themes/AdminLTE';
    public $css = [
        'dist/css/adminlte.min.css',
        'dist/css/font-source-sans-pro.css',
        'plugins/fontawesome-free/css/all.min.css',

        // "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
    ];
    public $js = [
        'dist/js/adminlte.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}