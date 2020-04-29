<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Ahmad Fadly Dzil Jalal <ahmadfadlydziljalal@gmail.com>
 * @since 2.0
 */
class AppAssetBs4 extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/font-play-fair.css',
        'css/site-bs4.css',
    ];
    public $js = [
        'js/popper.min.js',
        'js/holder.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
