<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAssetBs4;
use app\widgets\Alert;
use yii\bootstrap4\Html;
use yii\helpers\Url;

AppAssetBs4::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4 pt-1">

                <span class="text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 16" width="12" height="16"><path
                                fill-rule="evenodd"
                                d="M12 14.002a.998.998 0 01-.998.998H1.001A1 1 0 010 13.999V13c0-2.633 4-4 4-4s.229-.409 0-1c-.841-.62-.944-1.59-1-4 .173-2.413 1.867-3 3-3s2.827.586 3 3c-.056 2.41-.159 3.38-1 4-.229.59 0 1 0 1s4 1.367 4 4v1.002z"></path></svg>
                    <?=
                    Yii::$app->user->isGuest ?
                        ' Guest' :
                        Yii::$app->user->identity->username
                    ?>
                </span>
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="<?php echo Yii::$app->homeUrl ?>">
                    <?= strtoupper(getenv("APP_NAME")) ?>
                </a>
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="mx-3">
                        <circle cx="10.5" cy="10.5" r="7.5"></circle>
                        <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
                    </svg>
                </a>

                <?php if (Yii::$app->user->isGuest): ?>
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo Url::to(['/site/login']) ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16" width="14" height="16">
                            <path fill-rule="evenodd"
                                  d="M7 6.75V12h4V8h1v4c0 .55-.45 1-1 1H7v3l-5.45-2.72c-.33-.17-.55-.52-.55-.91V1c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v3h-1V1H3l4 2v2.25L10 3v2h4v2h-4v2L7 6.75z"></path>
                        </svg>
                        Sign In
                    </a>
                <?php else: ?>



                    <?php
                    echo Html::beginForm(['/site/logout'], 'post');
                    echo Html::submitButton('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 17" width="16" height="17"><path fill-rule="evenodd" d="M12 9V7H8V5h4V3l4 3-4 3zm-2 3H6V3L2 1h8v3h1V1c0-.55-.45-1-1-1H1C.45 0 0 .45 0 1v11.38c0 .39.22.73.55.91L6 16.01V13h4c.55 0 1-.45 1-1V8h-1v4z"></path></svg> Sign Out', [
                            'class' => 'btn btn-sm btn-outline-secondary text-danger'
                        ]
                    );
                    echo Html::endForm() ?>

                <?php endif ?>
            </div>
        </div>
    </header>


    <?php try {
        echo Alert::widget();
        echo $content;
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>
</div>
<!--<footer class="blog-footer">-->
<!--    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>-->
<!--    </p>-->
<!--    <p><a href="#">Back to top</a></p>-->
<!--</footer>-->

<?php
$js = <<<JS
Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
JS;
$this->registerJs($js, 3);

?>
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" viewBox="0 0 200 250" preserveAspectRatio="none"
     style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
        <style type="text/css"></style>
    </defs>
    <text x="0" y="13" style="font-weight:bold;font-size:13pt;font-family:Arial, Helvetica, Open Sans, sans-serif">
        Thumbnail
    </text>
</svg>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
