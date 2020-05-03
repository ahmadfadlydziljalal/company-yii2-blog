<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */
/* @var $usernameField string */
/* @var $extraColumns string[] */

$this->title = Yii::t('rbac-admin', 'Assignments');
unset($this->params['breadcrumbs']);
$this->params['breadcrumbs'][] = $this->title;

$columns = [
    ['class' => 'yii\grid\SerialColumn'],
    $usernameField,
];
if (!empty($extraColumns)) {
    $columns = array_merge($columns, $extraColumns);
}
$columns[] = [
    'class' => 'yii\grid\ActionColumn',
    'template' => '{view}',
    'header' => 'Actions',
    'buttons' => [
        'view' =>  function($url,$model) {
            return Html::a('<i class="fas fa-eye"></i>', $url, [
                'title' => Yii::t('app', 'view')
            ]);
        },
    ]
];
?>
<div class="assignment-index">
    <?php Pjax::begin(); ?>
    <?php
    try {
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $columns,
        ]);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    ?>
    <?php Pjax::end(); ?>

</div>
