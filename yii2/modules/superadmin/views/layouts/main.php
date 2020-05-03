<?php

/* @var $this \yii\web\View */
/* @var $content string */


use app\assets\AdminLTE3Asset;
use yii\bootstrap\Html;

AdminLTE3Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::$app->language ?>">

<head>
    <meta charset="<?php echo Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?php echo Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php $this->beginBody() ?>

<div class="wrapper">
    <?php
    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@app/themes/AdminLTE');

    ?>

    <?php echo $this->render('header', [
            'directoryAsset' => $directoryAsset
    ]) ?>

    <?php echo $this->render('left', [
        'directoryAsset' => $directoryAsset
    ]) ?>

    <?php

    echo $this->render('content', [
        'content' => $content,
    ])
    ?>

    <?php echo $this->render('footer', []) ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
