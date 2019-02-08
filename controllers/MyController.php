<?php

namespace app\controllers;

class MyController extends AppController
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