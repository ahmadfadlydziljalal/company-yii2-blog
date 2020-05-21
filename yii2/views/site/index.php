<?php

/* @var $this yii\web\View */

$this->title = getenv("APP_NAME");
?>
<div class="site-index">

    <div class="jumbotron p-3 p-md-5 text-black rounded bg-light">
        <div class="col-md-6 px-0">
            <h4 class="display-4 font-weight-bold">
                Welcome To Backend
            </h4>
            <p class="lead my-3">
                <?php echo Yii::powered() ?>
                Versi: <?php echo Yii::getVersion() ?>
            </p>
            <p class="lead mb-0">
                <a href="https://www.yiiframework.com/" target="_blank" class="text-primary font-weight-bold">Continue reading...</a>
            </p>
        </div>
    </div>


    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Virtualization</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Docker</a>
                    </h3>
                    <div class="mb-1 text-muted">FROM 19.03.6</div>
                    <p class="card-text mb-auto">Docker is a set of platform as a service products that uses OS-level
                        ...</p>
                    <a target="_blank" href="https://docs.docker.com/">Continue reading &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="<?php echo \yii\helpers\Url::to(['@web/img/icon/text-dockerfile.svg']) ?>"
                     data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Database</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">MySQL</a>
                    </h3>
                    <div class="mb-1 text-muted">FROM mysql:5.7</div>
                    <p class="card-text mb-auto">MySQL Database Service is a fully managed database service to deploy...</p>
                    <a target="_blank" href="https://www.mysql.com/">Continue reading &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="<?php echo \yii\helpers\Url::to(['@web/img/icon/mysql-workbench.svg']) ?>"
                     data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Web Server</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Nginx</a>
                    </h3>
                    <div class="mb-1 text-muted">FROM nginx:1.18.0-alpine</div>
                    <p class="card-text mb-auto">
                        NGINX accelerates content and application delivery, improves security...
                    </p>

                    <a  target="_blank" href="https://www.nginx.com/">Continue reading &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="<?php echo \yii\helpers\Url::to(['@web/img/icon/nginx-seeklogo.com.svg']) ?>"
                     data-holder-rendered="true">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Database Client</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">Adminer</a>
                    </h3>
                    <div class="mb-1 text-muted">FROM adminer:4.7.6</div>
                    <p class="card-text mb-auto">Adminer (formerly phpMinAdmin) is a full-featured database management tool... </p>

                    <a href="https://www.adminer.org/">Continue reading &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="<?php echo \yii\helpers\Url::to(['@web/img/icon/network-server-database.svg']) ?>"
                     data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>
