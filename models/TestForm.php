<?php
/**
 * User: Gordondalos
 * Date: 10.02.2019
 * Time: 14:23
 */

namespace app\models;

use yii\base\Model;
use yii\db\ActiveRecord;

class TestForm extends ActiveRecord {

    public static function tableName() {
        return 'message';
    }

    // эти поля нужно заполнять толкь для того если бы используем класс модель
    // для актив рекорд их указывать не нужно даныне не сохраняются
//    public $name;
//    public $email;
//    public $text;

    // изменяем лейблы
    public function attributeLabels() {
        return [
            'name' => 'Имя',
            'email' => 'Ваше мыльце',
            'text' => 'Ваше письмишко',
        ];
    }

    // если не указывать правила валидации то поля не долетят до модели автоматом, нужно хотябы указать валидатор safe
    public function rules() {
        return [
//            [['name', 'email'], 'required', 'message' => 'Поле обязательно' ],
            [['name', 'email'], 'required'],
            ['email', 'email'],
            ['email', 'string', 'min' => 5],
            ['name', 'string',
                'min' => 2,
                'max' => 255,
                'tooShort' => 'ППЦ короктое имя - неподходит',
                'tooLong' => 'Херасе, a можно покороче?'],
            ['text', 'string', 'length' => [2, 255]],

            ['text', 'myRule'],
//            ['text', 'trim'],
            ['text', 'safe'],
        ];
    }

    // эта валидация сработает только на сервере
    public function myRule($attrs, $params) {
//        if(! in_array($this->$attrs, ['hello', 'world'])) {
//            $this->addError($attrs, 'Валидация на сервере не прошла');
//        }
        if($attrs == '') {
            $this->addError($attrs, 'Валидация на сервере не прошла');
        }
    }


}