<?php


/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\AlertBs4;
use yii\bootstrap4\Breadcrumbs;
use yii\helpers\Url;

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?php echo ucfirst($this->title) ?>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <?php
                    try {
                        $breadcrumbs = isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [];
                        echo Breadcrumbs::widget([
                                'links' => $breadcrumbs,
                                'homeLink' => [
                                    'label' => 'Super Admin',  // required
                                    'url' => Url::to(['/superadmin/default']),      // optional, will be processed by Url::to()
                                ],
                                'options' => [
                                    'class' => 'float-sm-right'
                                ]
                            ]
                        );
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    } ?>

                    <!--                    <ol class="breadcrumb float-sm-right">-->
                    <!--                        <li class="breadcrumb-item"><a href="#">Home</a></li>-->
                    <!--                        <li class="breadcrumb-item active">Dashboard v2</li>-->
                    <!--                    </ol>-->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <?php try {

                echo AlertBs4::widget([
                    'options' => [
                        'class' => 'alert',
                        'role' => 'alert'
                    ]
                ]);
            } catch (Exception $e) {
                echo $e->getMessage();
            } ?>
            <?= $content ?>
        </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
