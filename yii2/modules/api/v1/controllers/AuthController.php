<?php
/**
 * Created by PhpStorm.
 * User: Dzil
 * Date: 31-Oct-18
 * Time: 01:07
 */

namespace app\modules\api\v1\controllers;


use app\models\User;
use bizley\jwt\Jwt;
use bizley\jwt\JwtHttpBearerAuth;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Yii;
use yii\helpers\Json;
use yii\rest\Controller;
use yii\web\Response;


class AuthController extends Controller {

    protected function verbs() {
        return [
            'login' => ['POST'],
            'token' => ['GET'],
        ];
    }

    public function behaviors() {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => JwtHttpBearerAuth::class,
            'optional' => [
                'login'
            ]
        ];
        return $behaviors;
    }

    /**
     * @param $authentication
     * @param $authorization
     * @return string
     */
    protected function generateJWT($authentication, $authorization) {

        /** @var Jwt $jwt */
        $jwt = Yii::$app->jwt;
        $signer = new Sha256();

        $token = $jwt->getBuilder()
            ->setIssuer(Yii::$app->params['companyWebsite']) // Configures the issuer (iss claim)
            ->setAudience(Yii::$app->params['companyWebsite']) // Configures the audience (aud claim)
            ->setId('4f1g23a12aa', true) // Configures the id (jti claim), replicating as a header item
            ->setIssuedAt(time()) // Configures the time that the token was issued (iat claim)
            ->setNotBefore(time() + 60) // Configures the time that the token can be used (nbf claim)
            ->setExpiration(time() + 3600) // Configures the expiration time of the token (exp claim)
            ->set('data-authentication', $authentication)
            ->set('data-authorization', $authorization)
            ->sign($signer, $jwt->key) // creates a signature using "testing" as key
            ->getToken();

        return (string)$token;
    }

    /**
     * @return array | Json
     */
    public function actionLogin() {

        $username = Yii::$app->request->post('username');
        $password = Yii::$app->request->post('password');

        // validasi jika kosong
        if (empty($username) || empty($password)) {
            Yii::$app->response->setStatusCode(400);
            $response = [
                'status' => 'error',
                'message' => 'Please Provide Username and Password',
            ];
        } else {

            /*  Find User By The name*/
            $user = User::findByUsername($username);

            if (!empty($user)) {
                if ($user->validatePassword($password)) {

                    Yii::$app->response->setStatusCode(200);
                    $jwt = $this->generateJWT(
                        [
                            'id' => $user->id,
                            'username' => $user->username,

                        ],
                        [
                            'role' => array_keys(Yii::$app->authManager->getRolesByUser($user->id)),
                            'route' => array_keys(Yii::$app->authManager->getPermissionsByUser($user->id))
                        ]
                    );
                    $response = [
                        'status' => 'success',
                        'token' => $jwt,
                    ];

                    /*Update auth_key_token*/
                    $user->token = $jwt;
                    $user->save(false);

                } else {

                    Yii::$app->response->setStatusCode(400);
                    $response = [
                        'status' => 'error',
                        'message' => 'Wrong Password',
                    ];
                }
            }
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

    /**
     * @return array | Json
     */
    public function actionToken() {
        /** @var Jwt $jwt */
        Yii::$app->response->format = Response::FORMAT_JSON;
        $jwt = Yii::$app->jwt;

        /** @var User $user */
        $user = Yii::$app->user->identity;
        $token = $jwt->getParser()->parse($user->token);

        return $token->getClaims();

    }
}