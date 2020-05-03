<?php

namespace app\modules\superadmin\controllers;

use Yii;
use yii\web\Controller;

/**
 * Default controller for the `Module` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Action Read Me
     */
    public function actionReadMe($page = 'README.md')
    {
        if (strpos($page, '.png') !== false) {
            $file = Yii::getAlias("@app/{$page} . '/..'");
            return Yii::$app->getResponse()->sendFile($file);
        }
        return $this->render('read-me', ['page' => $page]);
    }
}
