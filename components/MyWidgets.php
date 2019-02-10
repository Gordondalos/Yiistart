<?php
/**
 * Author: Gordondalos
 * Date: 10.02.2019
 * Time: 21:20
 */

namespace app\components;

use yii\base\Widget;

class MyWidgets extends Widget{
    public $name;

    public function init() {
        parent::init();
        // если параметр в виджет не передали то установим параметр по умолчанию
        if($this->name === null) {
            $this->name = 'Гость';
        }
        ob_start();
    }

    public function run() {
//        return $this->render('my', ['name'=> $this->name]);
        $content = ob_get_clean();
        $content = mb_strtoupper($content, 'utf-8');
        return $this->render('my', ['content'=> $content]);

    }

}