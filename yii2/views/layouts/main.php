<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAssetBs4;
use app\widgets\Alert;
use rmrevin\yii\fontawesome\FAS;
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 16" width="12" height="16"><path fill-rule="evenodd" d="M12 14.002a.998.998 0 01-.998.998H1.001A1 1 0 010 13.999V13c0-2.633 4-4 4-4s.229-.409 0-1c-.841-.62-.944-1.59-1-4 .173-2.413 1.867-3 3-3s2.827.586 3 3c-.056 2.41-.159 3.38-1 4-.229.59 0 1 0 1s4 1.367 4 4v1.002z"></path></svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 16" width="14" height="16"><path fill-rule="evenodd" d="M7 6.75V12h4V8h1v4c0 .55-.45 1-1 1H7v3l-5.45-2.72c-.33-.17-.55-.52-.55-.91V1c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v3h-1V1H3l4 2v2.25L10 3v2h4v2h-4v2L7 6.75z"></path></svg>
                        Sign In
                    </a>
                <?php else: ?>
                    <?php
                    echo Html::a('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path fill-rule="evenodd" d="M9 5H8V4h1v1zm4 3h-1v1h1V8zM6 5H5v1h1V5zM5 8H4v1h1V8zm11-5.5l-.5-.5L9 7c-.06-.02-1 0-1 0-.55 0-1 .45-1 1v1c0 .55.45 1 1 1h1c.55 0 1-.45 1-1v-.92l6-5.58zm-1.59 4.09c.19.61.3 1.25.3 1.91 0 3.42-2.78 6.2-6.2 6.2-3.42 0-6.21-2.78-6.21-6.2 0-3.42 2.78-6.2 6.2-6.2 1.2 0 2.31.34 3.27.94l.94-.94A7.459 7.459 0 008.51 1C4.36 1 1 4.36 1 8.5 1 12.64 4.36 16 8.5 16c4.14 0 7.5-3.36 7.5-7.5 0-1.03-.2-2.02-.59-2.91l-1 1z"></path></svg>', ['/site/dashboard'], [
                        'class' => 'btn btn-sm btn-outline-secondary',
                        'style' => [
                            'margin-right' => '5px',
                        ]
                    ])
                    ?>
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
    <div class="nav-scroller py-1 mb-2">
        <!--        <nav class="nav d-flex justify-content-between">-->
        <nav class="nav d-flex">
            <a class="p-2 text-muted" href="<?php echo Url::to(['site/index']) ?>">
                <?= FAS::icon(FAS::_HOME) ?>
                Home

            </a>
            <a class="p-2 text-muted" href="<?php echo Url::to(['site/contact']) ?>">
                <?= FAS::icon(FAS::_ENVELOPE) ?>
                Contact
            </a>

            <a class="p-2 text-muted" href="<?php echo Url::to(['site/about']) ?>">
                <?= FAS::icon(FAS::_ADDRESS_BOOK) ?>
                About
            </a>

            <!--            <a class="p-2 text-muted" href="--><?php //echo Url::to(['site/about']) ?><!--">About</a>-->
            <!--            <a class="p-2 text-muted" href="#">HRD</a>-->
            <!--            <a class="p-2 text-muted" href="#">ISO & ISM</a>-->
            <!--            <a class="p-2 text-muted" href="#">Purchasing</a>-->
            <!--            <a class="p-2 text-muted" href="#">Finance</a>-->
            <!--            <a class="p-2 text-muted" href="#">Accounting</a>-->
            <!--            <a class="p-2 text-muted" href="#">Sales</a>-->
            <!--            <a class="p-2 text-muted" href="#">Marketing</a>-->
            <!--            <a class="p-2 text-muted" href="#">Operation</a>-->
            <!--            <a class="p-2 text-muted" href="#">Export</a>-->
            <!--            <a class="p-2 text-muted" href="#">Import</a>-->
            <!--            <a class="p-2 text-muted" href="#">Lain-lain</a>-->
        </nav>
    </div>

    <?php try {
        echo Alert::widget();
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>
    <?= $content ?>

</div>

<!--<main role="main" class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-md-8 blog-main">-->
<!--            <h3 class="pb-3 mb-4 font-italic border-bottom">-->
<!--                From the Firehose-->
<!--            </h3>-->
<!--            <div class="blog-post">-->
<!--                <h2 class="blog-post-title">Sample blog post</h2>-->
<!--                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>-->
<!---->
<!--                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap.-->
<!--                    Basic typography, images, and code are all supported.</p>-->
<!--                <hr>-->
<!--                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus.-->
<!--                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere-->
<!--                    consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>-->
<!--                <blockquote>-->
<!--                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare-->
<!--                        vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!--                </blockquote>-->
<!--                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet-->
<!--                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--                <h2>Heading</h2>-->
<!--                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo-->
<!--                    luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac-->
<!--                    consectetur ac, vestibulum at eros.</p>-->
<!--                <h3>Sub-heading</h3>-->
<!--                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>-->
<!--                <pre><code>Example code block</code></pre>-->
<!--                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce-->
<!--                    dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>-->
<!--                <h3>Sub-heading</h3>-->
<!--                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia-->
<!--                    bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus,-->
<!--                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet-->
<!--                    risus.</p>-->
<!--                <ul>-->
<!--                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>-->
<!--                    <li>Donec id elit non mi porta gravida at eget metus.</li>-->
<!--                    <li>Nulla vitae elit libero, a pharetra augue.</li>-->
<!--                </ul>-->
<!--                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>-->
<!--                <ol>-->
<!--                    <li>Vestibulum id ligula porta felis euismod semper.</li>-->
<!--                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>-->
<!--                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>-->
<!--                </ol>-->
<!--                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="blog-post">-->
<!--                <h2 class="blog-post-title">Another blog post</h2>-->
<!--                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>-->
<!---->
<!--                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus.-->
<!--                    Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere-->
<!--                    consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>-->
<!--                <blockquote>-->
<!--                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare-->
<!--                        vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
<!--                </blockquote>-->
<!--                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet-->
<!--                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo-->
<!--                    luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac-->
<!--                    consectetur ac, vestibulum at eros.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="blog-post">-->
<!--                <h2 class="blog-post-title">New feature</h2>-->
<!--                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>-->
<!---->
<!--                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia-->
<!--                    bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus,-->
<!--                    tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet-->
<!--                    risus.</p>-->
<!--                <ul>-->
<!--                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>-->
<!--                    <li>Donec id elit non mi porta gravida at eget metus.</li>-->
<!--                    <li>Nulla vitae elit libero, a pharetra augue.</li>-->
<!--                </ul>-->
<!--                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet-->
<!--                    fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>-->
<!--            </div>-->
<!---->
<!--            <nav class="blog-pagination">-->
<!--                <a class="btn btn-outline-primary" href="#">Older</a>-->
<!--                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>-->
<!--            </nav>-->
<!---->
<!--        </div>-->
<!---->
<!--        <aside class="col-md-4 blog-sidebar">-->
<!--            <div class="p-3 mb-3 bg-light rounded">-->
<!--                <h4 class="font-italic">About</h4>-->
<!--                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus-->
<!--                    sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>-->
<!--            </div>-->
<!---->
<!--            <div class="p-3">-->
<!--                <h4 class="font-italic">Archives</h4>-->
<!--                <ol class="list-unstyled mb-0">-->
<!--                    <li><a href="#">March 2014</a></li>-->
<!--                    <li><a href="#">February 2014</a></li>-->
<!--                    <li><a href="#">January 2014</a></li>-->
<!--                    <li><a href="#">December 2013</a></li>-->
<!--                    <li><a href="#">November 2013</a></li>-->
<!--                    <li><a href="#">October 2013</a></li>-->
<!--                    <li><a href="#">September 2013</a></li>-->
<!--                    <li><a href="#">August 2013</a></li>-->
<!--                    <li><a href="#">July 2013</a></li>-->
<!--                    <li><a href="#">June 2013</a></li>-->
<!--                    <li><a href="#">May 2013</a></li>-->
<!--                    <li><a href="#">April 2013</a></li>-->
<!--                </ol>-->
<!--            </div>-->
<!---->
<!--            <div class="p-3">-->
<!--                <h4 class="font-italic">Elsewhere</h4>-->
<!--                <ol class="list-unstyled">-->
<!--                    <li><a href="#">GitHub</a></li>-->
<!--                    <li><a href="#">Twitter</a></li>-->
<!--                    <li><a href="#">Facebook</a></li>-->
<!--                </ol>-->
<!--            </div>-->
<!--        </aside>-->
<!--    </div>-->
<!--</main>-->

<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>
    </p>
    <p><a href="#">Back to top</a></p>
</footer>
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


<!--<div class="wrap">-->
<!--    --><?php
//    NavBar::begin([
//        'brandLabel' => Yii::$app->name,
//        'brandUrl' => Yii::$app->homeUrl,
//        'options' => [
//            'class' => 'navbar navbar-expand-md navbar-dark fixed-top bg-dark'
//        ]
//    ]);
//    echo Nav::widget([
//        'options' => ['class' => 'navbar-nav navbar-right'],
//        'items' => [
//            ['label' => 'Home', 'url' => ['/site/index']],
//            ['label' => 'About', 'url' => ['/site/about']],
//            ['label' => 'Contact', 'url' => ['/site/contact']],
//            Yii::$app->user->isGuest ? (
//                ['label' => 'Login', 'url' => ['/site/login']]
//            ) : (
//                '<li>'
//                . Html::beginForm(['/site/logout'], 'post')
//                . Html::submitButton(
//                    'Logout (' . Yii::$app->user->identity->username . ')',
//                    ['class' => 'btn btn-link logout']
//                )
//                . Html::endForm()
//                . '</li>'
//            )
//        ],
//    ]);
//    NavBar::end();
//    ?>
<!---->
<!--    <div class="container">-->
<!--        --><? //= Breadcrumbs::widget([
//            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//        ]) ?>
<!--        --><? //= Alert::widget() ?>
<!--        --><? //= $content ?>
<!--    </div>-->
<!--</div>-->
<!---->
<!--<footer class="footer">-->
<!--    <div class="container">-->
<!--        <p class="pull-left">&copy; My Company --><? //= date('Y') ?><!--</p>-->
<!--        <p class="pull-right">--><? //= Yii::powered() ?><!-- | Docker IP is: -->
<? //=  Yii::$app->request->remoteIP   ?><!--</p>-->
<!--    </div>-->
<!--</footer>-->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
