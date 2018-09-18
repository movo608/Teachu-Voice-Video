<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::$app->user->identity->username . '\'s profile';
$identity = Yii::$app->user->identity;
?>

<div class="profile-default-index col-md-12 col-lg-12 col-sm-12">
    <h1 class="text-center">Welcome, <?= '<span style="color: darkgreen">' . $user_type . '</span> ' . $identity->username ?>!</h1>
    <div class="row">
        <div class="col-md-3">
            <?= Html::img('../'.$identity->photo, ['class' => 'col-md-12']) ?>
        </div>
        <div class="col-md-3">
            <h3>Options</h3>
            <p>Email address: <?= $identity->email ?></p>
            <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'photo')->fileInput() ?>
                <div class="form-group">
                    <?= Html::submitButton('Change Profile Picture', ['class' => 'btn btn-success']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
