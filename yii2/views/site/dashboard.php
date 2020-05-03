<?php
/* @var $this \yii\web\View */

use yii\bootstrap4\Html;

$modules = Yii::$app->modules;
$exceptModules = ['debug', 'gii'];

$this->title = "Available Modules";
?>

<!-- Page Content -->


<!-- Page Heading -->
<h1 class="my-4">Available Modules</h1>
<div class="row">
    <?php foreach ($modules as $moduleName => $module) : ?>
        <?php if (!in_array($moduleName, $exceptModules)) : ?>

            <?php if (empty($module['defaultRoute'])) continue ?>
            <div class="col-4">
                <h3><?= ucfirst($moduleName) ?></h3>
                <p><?= $module['params']['description'] ?></p>
                <?php echo Html::a('Go To Module', empty($module['defaultRoute']) ? '#' : $module['defaultRoute'], [
                    'class' => 'btn btn-primary btn-xl'
                ]) ?>
            </div>

            <hr>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<!-- /.row -->

<br>
<br>
<br>
<br>
<br>
<footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>
    </p>
    <p><a href="#">Back to top</a></p>
</footer>


