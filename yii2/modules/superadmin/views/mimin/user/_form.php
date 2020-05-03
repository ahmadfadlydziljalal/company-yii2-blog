<?php

use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model \app\models\User */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="card card-default">
        <div class="card-header">
            <h4 class="card-title">Form Create / Update User</h4>
        </div>
        <div class="card-body">

            <?php echo $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
            <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

            <?php $model->status =  $model->status == 1 ? 1 : 0 ?>
            <?php echo $form->field($model, 'status')->radioList([
                1 => 'Active',
                0 => 'Banned'
            ],[

            ]) ?>

            <?php if (!$model->isNewRecord) { ?>
                <p class="text-info"> Leave blank if not change password</p>
                <div class="ui divider"></div>
                <?php echo $form->field($model, 'new_password') ?>
                <?php echo $form->field($model, 'repeat_password') ?>
            <?php } else {
                echo $form->field($model, 'generate_password', [
                    'inputTemplate' => '<div class="input-group">
                                            <div class="input-group-prepend">
                                                 <button class="btn btn-outline-secondary" type="button" onclick="generateRandomString(6)">Generate</button>
                                            </div>
                                            {input}
                                        </div>',
                    'inputOptions' => [
                        'placeholder' => 'Default = 123456',
                    ],
                ]);
            }
            ?>

        </div>

        <div class="card-footer">
            <div class="form-group">
                <?php echo Html::submitButton($model->isNewRecord ? 'Create' : 'Update', [
                    'class' => $model->isNewRecord ? 'btn btn-success' :
                        'btn btn-primary'
                ]) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

<?php
$js = <<<JS
function generateRandomString(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   console.log(result);
   document.getElementById("user-generate_password").value = document.getElementById('user-username').value + result;
}
JS;

$this->registerJs($js, 3);
