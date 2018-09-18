<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ValidSpecializations */

$this->title = 'Update Valid Specializations: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Valid Specializations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="valid-specializations-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
