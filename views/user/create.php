<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $modelUser app\models\User */
/* @var $modelAddress app\models\Address */

$this->title = 'Create User';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'modelUser' => $modelUser,
        'modelAddress' => $modelAddress
    ]) ?>

</div>
