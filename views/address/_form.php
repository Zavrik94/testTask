<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'index')->textInput(['maxlength' => true, 'type' => 'number']) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true, 'style' => 'text-transform: uppercase']) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'house_number')->textInput() ?>

    <?= $form->field($model, 'flat_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
