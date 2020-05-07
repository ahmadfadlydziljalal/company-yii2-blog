<?php


namespace app\modules\api\v1\controllers;


use app\models\User;
use yii\rest\ActiveController;

class UserController extends ActiveController {
    public $modelClass = User::class;
}