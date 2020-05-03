<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\administrator\models\AuthItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Roles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-index">

	<p>
		<?= Html::a('Create Role', ['create'], ['class' => 'btn btn-success']) ?>
	</p>

	<?= GridView::widget([
		'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
		'columns' => [
			['class' => 'yii\grid\SerialColumn'],
			'name',
			/*
			'type',
			'description:ntext',
			'rule_name',
			'data:ntext',
			// 'created_at',
			// 'updated_at',
			*/
            [
                'options' => ['width' => '80px',],
                'contentOptions' => [
                    'class' => 'text-nowrap'
                ],
                'template' => '{permission} {view} {update} {delete}',  // the default buttons + your custom button,
                'header' => 'Actions',
                'class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'update' =>  function($url,$model, $key) {
                        return Html::a('<i class="fas fa-edit"></i>', $url, [
                            'title' => Yii::t('app', 'update')
                        ]);
                    },
                    'view' =>  function($url,$model) {
                        return Html::a('<i class="fas fa-eye"></i>', $url, [
                            'title' => Yii::t('app', 'view')
                        ]);
                    },
                    'delete' => function($url,$model) {
                        return Html::a('<i class="fas fa-trash"></i>', $url, [
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
	]); ?>

</div>
