<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;
use app\models\ContactForm;

class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->redirect(['site/sobre']);
    }

    public function actionSobre()
    {
        return $this->render('sobre');
    }

    public function actionQuemSomos()
    {
        return $this->render('quem-somos');
    }

    public function actionComoFazemos()
    {
        return $this->render('como-fazemos');
    }

    public function actionComoAjudar()
    {
        return $this->render('como-ajudar');
    }

    public function actionContato()
    {
        return $this->render('contato');
    }
}
