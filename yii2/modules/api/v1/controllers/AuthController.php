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

        $username = Yii::$app->request->post('username');
        $password = Yii::$app->request->post('password');

        // validasi jika kosong
        if (empty($username) || empty($password)) {

            Yii::$app->response->setStatusCode(400);
            $response = [
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

                    Yii::$app->response->setStatusCode(200);
                    $response = [
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

                    Yii::$app->response->setStatusCode(400);
                    $response = [
                        'status' => 'error',
                        'message' => 'Wrong Password',
                    ];
                }
            } // Jika username tidak ditemukan bikin response kek gini
            else {

                Yii::$app->response->setStatusCode(400);
                $response = [
                    'status' => 'error',
                    'message' => 'The username is not found',
                ];
            }
        }
        return $response;
    }
}