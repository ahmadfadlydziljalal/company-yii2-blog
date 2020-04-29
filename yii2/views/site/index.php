<?php

/* @var $this yii\web\View */

use yii\helpers\VarDumper;

$this->title = getenv("APP_NAME");
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><?= Yii::powered()  ?></h1>
        <p class="lead">Versi: <?= Yii::getVersion()  ?></p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>MySQL</h2>
                <p>FROM mysql:5.7</p>
                <hr>
                <p>
                    MySQL Database Service is a fully managed database service to deploy
                    cloud-native applications using the world’s most popular open source database.
                    It is 100% developed, managed and supported by the MySQL Team.
                </p>

                <p><a class="btn btn-default" target="_blank" href="https://www.mysql.com/">MySQL Docs &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Nginx</h2>
                <p>FROM nginx:1.18.0-alpine</p>
                <hr>
                <p>
                    NGINX accelerates content and application delivery, improves security,
                    facilitates availability and scalability for the busiest web sites on the Internet.
                </p>

                <p><a class="btn btn-default" target="_blank" href="https://www.nginx.com/">NGINX Docs &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Adminer</h2>
                <p>FROM adminer:4.7.6</p>
                <hr>
                <p>Adminer (formerly phpMinAdmin) is a full-featured database management tool written in PHP. </p>

                <p><a class="btn btn-default" href="https://www.adminer.org/">Adminer Docs &raquo;</a></p>
            </div>
        </div>

    </div>
</div>