<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Meditators */

$this->title = 'Create Meditators';
$this->params['breadcrumbs'][] = ['label' => 'Meditators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meditators-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
