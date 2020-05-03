<?php

use hscstudio\mimin\models\Route;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model hscstudio\mimin\models\AuthItem */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Roles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="auth-item-view">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->name], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>

        <div class="row">
        	<div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            About
                        </div>
                    </div>

                        <?php try {
                            echo DetailView::widget([
                                'model' => $model,
                                'attributes' => [
                                    'name',
                                    //'type',
                                    //'description:ntext',
                                    //'rule_name',
                                    //'data:ntext',
                                    [
                                        'attribute' => 'created_at',
                                        'format' => ['date', 'php:d M Y H:i:s'],
                                    ],
                                    [
                                        'attribute' => 'updated_at',
                                        'format' => ['date', 'php:d M Y H:i:s'],
                                    ],
                                ],
                            ]);
                        } catch (Exception $e) {
                            echo $e->getMessage();
                        } ?>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card card-cyan">
                    <div class="card-header">
                        <div class="card-title">
                            Permissions
                        </div>
                    </div>
                    <?php

                    $types = Route::find()->select('type')->distinct()->where(['status' => 1])->all();
                    echo "<table id='permissionTable' class='table table-condensed table-striped table-hover table-bordered'>";
                    echo "<tr>";
                    echo "<th>Type</th>";
                    echo "<th>Permision</th>";
                    echo "<tr>";
                    $auth = Yii::$app->authManager;
                    $permissions = $auth->getPermissionsByRole($model->name);

                    foreach ($types as $type) {
                        echo "<tr>";
                        echo "<th>" . $type->type . "</th>";
                        echo "<td>";
                        $aliass = Route::find()->where([
                            'status' => 1,
                            'type' => $type->type,
                        ])->all();
                        foreach ($aliass as $alias) {
                            echo "<label class='label-block'>";
                            $can = array_key_exists($alias->name, $permissions);
                            $checked = false;
                            if ($can) $checked = true;
                            echo Html::checkbox($type->type . '_' . $alias->alias, $checked, [
                                    'title' => $alias->name,
                                    'class' => 'checkboxPermission',
                                ]) . ' ' . $alias->alias;
                            echo "</label>";
                        }
                        echo "</td>";
                        echo "</tr>";
                    }
                    //echo "</tbody>";
                    echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </div>

<?php
$this->registerJs('
  $(".checkboxPermission").bind("click", function(){
      setPermission($(this).attr("title"));
  });

  function setPermission(permissionName){
    $.post( "' . Url::to(['permission', 'roleName' => $model->name]) . '&permissionName="+permissionName, function( data ) {
        console.log(data.data)
    });
  }
');

$this->registerCss('
    .label-block{
        display:block;
        width:100px;
        float:left;
        overflow:hidden;
        font-weight: normal;
        font-size:80%;
        border-right:1px solid #ddd;
        margin-right:5px;
    }

    table#permissionTable tbody tr td, table#permissionTable tbody tr th{
        padding: 0px 5px !important;
    }
');