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
        if (Yii::$app->request->isPost) {
            
            $form = new ContactForm();
            if ($form->load(Yii::$app->request->post(), '') && $form->validate()) {
                $result = $form->contact('contato@cantinhovogeorgina.org');
            }
            else {
                $result = false;
            }

            Yii::$app->response->statusCode = $result ? 200 : 400;
            return;
        }
        
        return $this->render('contato');
    }
}
