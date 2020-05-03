<?php

use app\assets\AutoCompleteAsset;
use mdm\admin\models\Menu;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\redactor\widgets\Redactor;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\Menu */
/* @var $form yii\widgets\ActiveForm */
AutoCompleteAsset::register($this);

$opts = Json::htmlEncode([
    'menus' => Menu::getMenuSource(),
    'routes' => Menu::getSavedRoutes(),
]);
$this->registerJs("var _opts = $opts;");
$this->registerJs($this->render('_script.js'));
?>

<div class="menu-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= Html::activeHiddenInput($model, 'parent', ['id' => 'parent_id']); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 128]) ?>
    <?= $form->field($model, 'parent_name')->textInput(['id' => 'parent_name']) ?>
    <?= $form->field($model, 'route')->textInput(['id' => 'route']) ?>
    <?= $form->field($model, 'order')->input('number') ?>

    <?php try {
        /*echo $form->field($model, 'data')->widget(Redactor::class,[
            'clientOptions' => [
                'minHeight' => '300px'
            ]
        ]);*/
        echo $form->field($model, 'data')->textarea(['rows' => 7]);
    } catch (Exception $e) {
        echo $e->getMessage();
    } ?>


    <div class="form-group">
        <?=
        Html::submitButton($model->isNewRecord ? Yii::t('rbac-admin', 'Create') : Yii::t('rbac-admin', 'Update'), ['class' => $model->isNewRecord
            ? 'btn btn-success' : 'btn btn-primary'])
        ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>
