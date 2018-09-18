<?php

namespace common\components;

use yii\filters\AccessControl;

class AdminAccessControl extends AccessControl
{    
    public function init()
    {
        $this->rules[] =[
            'allow' => true,
            'roles' => ['@'],
            'matchCallback' => function () {
                return \Yii::$app->user->identity->getIsAdmin();
            }
        ];
        parent::init();
    }
}