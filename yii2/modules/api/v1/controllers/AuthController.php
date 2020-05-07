<?php
/**
 * Created by PhpStorm.
 * User: Dzil
 * Date: 31-Oct-18
 * Time: 01:07
 */

namespace app\modules\api\v1\controllers;


use app\models\User;
use Yii;
use yii\rest\Controller;


class AuthController extends Controller {

    protected function verbs() {
        return [
            'login' => ['POST'],
        ];
    }

    public function actionLogin() {
        // Tangkap data login dari client (username & password)
        $username = !empty($_POST['username']) ? $_POST['username'] : '';
        $password = !empty($_POST['password']) ? $_POST['password'] : '';
        $response = [];

        // validasi jika kosong
        if (empty($username) || empty($password)) {
            $response = [
                'response' => 400,
                'status' => 'error',
                'message' => 'username & password tidak boleh kosong!',
            ];
        } else {
            // cari di database, ada nggak username dimaksud
            $user = User::findByUsername($username);

            // jika username ada maka
            if (!empty($user)) {

                // check, valid nggak passwordnya, jika valid maka bikin response success
                if ($user->validatePassword($password)) {
                    $response = [
                        'response' => 200,
                        'status' => 'success',
                        'data-authentication' => [
                            'id' => $user->id,
                            'username' => $user->username,
                            'auth_key' => $user->auth_key
                        ],
                        'data-authorization' => array_keys(Yii::$app->authManager->getPermissionsByUser($user->id)),
                    ];

                } // Jika password salah maka bikin response seperti ini
                else {
                    $response = [
                        'response' => 400,
                        'status' => 'error',
                        'message' => 'Wrong Password',
                    ];
                }
            } // Jika username tidak ditemukan bikin response kek gini
            else {
                $response = [
                    'response' => 400,
                    'status' => 'error',
                    'message' => 'The username is not found',
                ];
            }
        }
        return $response;
    }
}