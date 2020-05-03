<?php

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;

use yii\bootstrap4\Html;
use yii\helpers\Url; ?>
<div class="Module-default-index">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Backend Specification</div>
                <div class="card-body">
                    <h5 class="card-title">PHP<br>Interpreter Code</h5>
                    <p class="card-text"><?= phpversion() ?></p>
                </div>
                <div class="card-footer">
                    <a href="https://www.php.net/ChangeLog-7.php#7.2.27" target="_blank" class="btn btn-primary">Go To Official</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Framework Specification</div>
                <div class="card-body">
                    <h5 class="card-title">Yii2<br>Framework</h5>
                    <p class="card-text"><?=  Yii::getVersion() ?></p>
                </div>
                <div class="card-footer">
                    <a href="https://www.yiiframework.com/" target="_blank" class="btn btn-primary">Go To Official</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">Adminer</div>
                <div class="card-body">
                    <h5 class="card-title">All Database Here <br> Server Info</h5>
                    <p class="card-text">
                        <?= $_SERVER['REMOTE_ADDR'] ?> | <?= Yii::$app->request->hostInfo ?> : <?= getenv('DB_PORT') ?>
                    </p>
                </div>
                <div class="card-footer">
                    <?=
                    Html::a('Go To Adminer', Url::base(true). ':8080', [
                        'class' => 'btn btn-primary',
                        'target' => '_blank'
                    ])
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
