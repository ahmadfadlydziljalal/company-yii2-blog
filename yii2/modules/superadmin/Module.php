<?php

namespace app\modules\superadmin;

use Yii;

/**
 * Module module definition class
 */
class Module extends \yii\base\Module {
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\superadmin\controllers';

    /**
     * {@inheritdoc}
     */
    public function init() {
        parent::init();
        Yii::$app->setHomeUrl('/superadmin');

        // custom initialization code goes here
    }
}
