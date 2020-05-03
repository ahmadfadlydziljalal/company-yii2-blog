<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel \hscstudio\mimin\models\RouteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Routes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="route-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <p>
        <?= Html::a('Create Route', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Generate Route', ['generate'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php try {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'type',
                'alias',
                'name',
                [
                    'attribute' => 'status',
                    'filter' => [0 => 'off', 1 => 'on'],
                    'format' => 'raw',
                    'options' => [
                        'width' => '80px',
                    ],
                    'value' => function ($data) {
                        if ($data->status == 1)
                            return "<span class='label label-primary'>" . 'On' . "</span>";
                        else
                            return "<span class='label label-danger'>" . 'Off' . "</span>";
                    }
                ],
                [
                    'options' => ['width' => '80px',],
                    'contentOptions' => [
                        'class' => 'text-nowrap'
                    ],
                    'header' => 'Actions',
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            return Html::a('<i class="fas fa-edit"></i>', ['update', 'id' => $key], [
                                'title' => Yii::t('app', 'update')
                            ]);
                        },
                        'view' => function ($url, $model) {
                            return Html::a('<i class="fas fa-eye"></i>', $url, [
                                'title' => Yii::t('app', 'view')
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a('<i class="fas fa-trash"></i>', $url, [
                                'title' => Yii::t('app', 'delete')
                            ]);
                        }
                    ]
                ],
            ],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>

</div>
