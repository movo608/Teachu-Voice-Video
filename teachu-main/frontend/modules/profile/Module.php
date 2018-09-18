<?php

namespace app\modules\profile;

use Yii;
use yii\helpers\Url;

/**
 * profile module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\profile\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    /**
     * Before action
     */
    public function beforeAction($action)
    {
        if (Yii::$app->controller->module->id === 'profile' && Yii::$app->user->isGuest) {
            Yii::$app->response->redirect(Url::to(['/site/login']));
        }

        return parent::beforeAction($action);
    }
}
