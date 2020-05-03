<?php


namespace app\assets;


use yii\web\AssetBundle;

class AutoCompleteAsset extends AssetBundle {
    /**
     * @inheritdoc
     */
    public $sourcePath = '@app/themes/AdminLTE/plugins/jquery-ui';
    /**
     * @inheritdoc
     */
    public $css = [
        'jquery-ui.min.css',
    ];
    /**
     * @inheritdoc
     */
    public $js = [
        'jquery-ui.min.js',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}