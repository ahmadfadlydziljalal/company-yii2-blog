<?php

/* @var $this yii\web\View */

use yii\helpers\VarDumper;

$this->title = getenv("APP_NAME");
?>
<div class="site-index">

    <div class="jumbotron p-3 p-md-5 text-primary rounded bg-light">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-weight-bold">
                <?php echo Yii::powered()  ?>
            </h1>
            <p class="lead my-3">
                Versi: <?php echo Yii::getVersion()  ?>    
            </p>
            <p class="lead mb-0"><a href="https://www.yiiframework.com/" target="_blank" class="text-dark font-weight-bold">Continue reading...</a></p>
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
                    <p class="card-text mb-auto">Docker is a set of platform as a service products that uses OS-level ...</p>
                    <a target="_blank" href="https://docs.docker.com/">Continue reading &raquo;</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171c6c15395%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171c6c15395%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20833206176758%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
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
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171c6c15395%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171c6c15395%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20833206176758%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
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
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171c6c1539b%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171c6c1539b%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20833206176758%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
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
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb"
                     alt="Thumbnail [200x250]" style="width: 200px; height: 250px;"
                     src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_171c6c15395%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_171c6c15395%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.20833206176758%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                     data-holder-rendered="true">
            </div>
        </div>
    </div>
</div>