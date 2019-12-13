<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Address */

$this->title = $model->id;
\yii\web\YiiAsset::register($this);

?>
<div class="address-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'user_id' => Yii::$app->request->get('user_id')], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Back to User', ['//user/view', 'id' => $user_id], ['class' => 'btn btn-default']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'index',
            'country',
            'city',
            'street',
            'house_number',
            'flat_number',
        ],
    ]) ?>

</div>
