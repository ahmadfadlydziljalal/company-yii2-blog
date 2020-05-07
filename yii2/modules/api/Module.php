<?php

namespace app\modules\api;

/**
 * Module module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\api\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->enableAutoLogin = false;

        // custom initialization code goes here
        $this->modules = [
            'v1' => [
                'class' => 'app\modules\api\v1\Module',
            ],
        ];
    }
}
