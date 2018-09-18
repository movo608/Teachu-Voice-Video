<?php

namespace app\modules\profile\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use common\models\User;
use yii\db\ActiveRecord;

/**
 * Default controller for the `profile` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        
        $model = User::findOne(['id' => Yii::$app->user->identity->id]);
        $user_type = '';

        if (Yii::$app->request->post()) {
            $model->photo = UploadedFile::getInstance($model, 'photo');
            if ($model->upload()) {
                return $this->refresh();
            }
        }

        switch (Yii::$app->user->identity->type) {
            case 1:
                $user_type = 'overlord';
                break;
            case 2:
                $user_type = 'pupil';
                break;
            case 3:
                $user_type = 'mentor';
                break;
            case 4:
                $user_type = 'admin';
                break;
        }

        return $this->render('index', [
            'model' => $model,
            'user_type' => $user_type
        ]);
    }
}
