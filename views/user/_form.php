<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $modelUser app\models\User */
/* @var $modelAddress app\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'action' => ['create'],
            'method' => 'post',
            'fieldConfig' => [
                'horizontalCssClasses' => [
                    'label' => 'col-sm-2',
                    'offset' => 'col-sm-offset-2',
                    'wrapper' => 'col-sm-10',
                ],
            ],
    ]); ?>
    <div class="row">
        <div class="col-md-6">
            <?= $form->field($modelUser, 'login')->textInput(['maxlength' => true]) ?>

            <?= $form->field($modelUser, 'password')->passwordInput(['maxlength' => true]) ?>

            <?= $form->field($modelUser, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($modelUser, 'surname')->textInput(['maxlength' => true]) ?>

            <?= $form->field($modelUser, 'sex')->textInput(['maxlength' => true])->dropDownList($modelUser->getGender()) ?>

            <?= $form->field($modelUser, 'email')->textInput(['maxlength' => true]) ?>
        </div>
        <?php if ($modelAddress) : ?>
            <?= "<div class=\"col-md-6\">" ?>
                <?= $form->field($modelAddress, 'index')->textInput(['maxlength' => true]) ?>

                <?= $form->field($modelAddress, 'country')->textInput(['maxlength' => true]) ?>

                <?= $form->field($modelAddress, 'city')->textInput(['maxlength' => true]) ?>

                <?= $form->field($modelAddress, 'street')->textInput(['maxlength' => true]) ?>

                <?= $form->field($modelAddress, 'house_number')->textInput() ?>

                <?= $form->field($modelAddress, 'flat_number')->textInput() ?>
            <?= "</div>" ?>
        <?php endif; ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
