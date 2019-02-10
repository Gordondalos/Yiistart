<?php
/**
 * User: Gordondalos
 * Date: 10.02.2019
 * Time: 14:23
 */

namespace app\models;

use yii\base\Model;

class TestForm extends Model {
    public $name;
    public $email;
    public $text;

    // изменяем лейблы
    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'Ваше мыльце',
            'text' => 'Ваше письмишко',
        ];
    }

    public function rules() {
        return [
//            [['name', 'email'], 'required', 'message' => 'Поле обязательно' ],
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['email', 'string', 'min' => 5],
            ['name', 'string',
                'min' => 2,
                'max' => 5,
                'tooShort' => 'ППЦ короктое имя - неподходит',
                'tooLong' => 'Херасе, a можно покороче?'],
            ['text', 'string', 'length' => [2, 5]],

            ['text', 'myRule'],
            ['text', 'trim'],
        ];
    }

    // эта валидация сработает только на сервере
    public function myRule($attrs, $params) {
        if(! in_array($this->$attrs, ['hello', 'world'])) {
            $this->addError($attrs, 'wrong');
        }
    }


}