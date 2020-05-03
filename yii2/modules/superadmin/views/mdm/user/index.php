<?php

use mdm\admin\components\Helper;
use rmrevin\yii\fontawesome\FAS;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel mdm\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('rbac-admin', 'Users');
unset($this->params['breadcrumbs']);
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
        <?= Html::a('Create User', ['signup'], [
            'class' => 'btn btn-success'
        ]) ?>
    </p>

    <?php
    try {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'username',
                'email:email',
                [
                    'attribute' => 'status',
                    'value' => function ($model) {
                        return $model->status == 0 ? 'Inactive' : 'Active';
                    },
                    'filter' => [
                        0 => 'Inactive',
                        10 => 'Active'
                    ]
                ],
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => Helper::filterActionColumn(['view', 'delete', 'change-password', 'activate']),
                    'header' => 'Actions',
                    //'template' => '{view} {activate} {delete}',
                    'buttons' => [
                        'view' => function ($url, $model) {
                            return Html::a('<i class="fas fa-eye"></i>', $url, [
                                'title' => Yii::t('app', 'view')
                            ]);
                        },
                        'change-password' => function ($url, $model) {
                            return Html::a('<i class="fa fa-redo-alt"></i>', $url, [
                                'title' => Yii::t('app', 'view')
                            ]);
                        },
                        'delete' => function ($url, $model) {
                            return Html::a('<i class="fas fa-trash"></i>', $url, [
                                'title' => Yii::t('app', 'delete'),
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]);
                        },
                        'activate' => function ($url, $model) {
                            if ($model->status == 10) {
                                return '';
                            }
                            $options = [
                                'title' => Yii::t('rbac-admin', 'Activate'),
                                'aria-label' => Yii::t('rbac-admin', 'Activate'),
                                'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                                'data-method' => 'post',
                                'data-pjax' => '0',
                            ];
                            return Html::a(FAS::icon(FAS::_CHECK), $url, $options);
                        }
                    ]
                ],
            ],
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
</div>
