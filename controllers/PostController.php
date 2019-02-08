<?php

namespace app\controllers;
use Yii;

class PostController extends AppController {

    public $layout = 'basic'; // установка шаблона для конролера целиком

    public function actionIndex(){

        if(Yii::$app->request->isAjax){
            $data = $_REQUEST;
        }


        $names = ['Ivanov', 'Petrov', 'Сидоров'];
        return $this->render('index', ['names' => $names]);
    }

    public function actionShow(){
        //$this->layout = 'basic'; // установка шаблона для конкретной страницы
        return $this->render('show');
    }

}