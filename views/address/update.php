<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Address */

$this->title = 'Update Address: ' . $model->id;
?>
<div class="address-update">

    <?= Html::a('Back to User', ['//user/view', 'id' => $user_id], ['class' => 'btn btn-default']) ?>

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
