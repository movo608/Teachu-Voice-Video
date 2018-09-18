<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Meditators */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Meditators', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meditators-view">

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
            'name',
            'specialization',
            'photo' => [
                'label' => 'photo',
                'attribute' => 'photo',
                'format' => ['image', ['clas' => 'col-md-12 col-sm-12']],
                'value' => function($value) {
                    return '/teachu-main/backend/web/' . $value->photo;
                }
            ],
            'rating',
        ],
    ]) ?>

</div>
