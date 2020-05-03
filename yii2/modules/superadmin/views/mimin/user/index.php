<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel \hscstudio\mimin\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            //'auth_key',
            //'password_hash',
            //'password_reset_token',
            'email:email',
            [
                'attribute' => 'roles',
                'format' => 'raw',
                'contentOptions' => [
                    'class' => 'text-nowrap',
                ],
                'value' => function ($data) {
                    $roles = [];
                    foreach ($data->roles as $role) {
                        $roles[] = $role->item_name;
                    }
                    return Html::a(implode(', ', $roles), ['view', 'id' => $data->id]);
                }
            ],
            [
                'attribute' => 'status',
                'format' => 'raw',
                'options' => [
                    'class' => '80px',
                ],
                'value' => function ($data) {
                    if ($data->status == 10)
                        return "<span class='label label-primary'>" . 'Active' . "</span>";
                    else
                        return "<span class='label label-danger'>" . 'Banned' . "</span>";
                }
            ],
            /*[
                'attribute' => 'created_at',
                'format' => ['date', 'php:d-m-Y, H:i:s'],
                'contentOptions' => [
                    'class' => 'text-nowrap',
                ],
            ],
            [
                'attribute' => 'updated_at',
                'format' => ['date', 'php:d-m-Y, H:i:s'],
                'contentOptions' => [
                    'class' => 'text-nowrap',
                ],
            ],*/
            [
                'options' => ['width' => '80px',],
                'contentOptions' => [
                        'class' => 'text-nowrap'
                ],
                'header' => 'Actions',
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' =>  function($url,$model) {
                        return Html::a('<i class="fas fa-edit"></i> Update ', $url, [
                            'title' => Yii::t('app', 'update')
                        ]);
                    },
                    'view' =>  function($url,$model) {
                        return Html::a('<i class="fas fa-eye"></i> Role ', $url, [
                            'title' => Yii::t('app', 'view')
                        ]);
                    },
                    'delete' => function($url,$model) {
                        return Html::a('<i class="fas fa-trash"></i> Delete ', $url, [
                            'title' => Yii::t('app', 'delete'),
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ]
            ],
        ],
    ]);
    ?>
</div>
