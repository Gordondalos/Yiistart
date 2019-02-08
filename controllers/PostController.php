<?php

namespace app\controllers;
use Yii;

class PostController extends AppController {

    public function actionIndex(){
        $names = ['Ivanov', 'Petrov', 'Сидоров'];
        return $this->render('index', ['names' => $names]);
    }

}