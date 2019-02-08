<?php

namespace app\controllers;
use Yii;

class PostController extends AppController {

    public function actionIndex(){
        $names = ['Ivanov', 'Petrov', 'Сидоров'];
        $this->debug($names);
//        $this->context->debug(Yii::$app)﻿;

        return $this->render('index');
    }

}