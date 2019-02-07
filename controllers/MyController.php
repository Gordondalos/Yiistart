<?php

namespace app\controllers;
use yii\web\Controller;

class MyController extends Controller
{
    /*
     * id передается через параметры
     * */
    public function actionIndex($id = null){
        $hi = 'hello World';
        $names = ['Ivanov', 'Petrov', 'Сидоров'];
        //return $this->render('index', ['hello' => $hi, 'fio' => $names]);
        return $this->render('index', compact('hi', 'names', 'id'));
    }

}