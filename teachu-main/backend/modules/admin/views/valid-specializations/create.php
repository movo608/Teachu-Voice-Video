<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ValidSpecializations */

$this->title = 'Create Valid Specializations';
$this->params['breadcrumbs'][] = ['label' => 'Valid Specializations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="valid-specializations-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
