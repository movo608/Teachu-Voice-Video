<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Meditators;

/* @var $this yii\web\View */
/* @var $model common\models\Rating */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rating-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'meditator_id' => [
                'label' => 'Mentor',
                'attribute' => 'meditator_id',
                'value' => function($value) {
                    return Meditators::findOne(['id' => $value->meditator_id])->name;
                }
            ],
            'value',
        ],
    ]) ?>

</div>
