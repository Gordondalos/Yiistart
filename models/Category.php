<?php
/**
 * User: Gordondalos
 * Date: 10.02.2019
 * Time: 17:17
 */

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    // устанавливаем нужную таблицу  - сопоставление, можно не указыватье если таблица совпадает
    public static function tableName() {
        return 'category';
    }

}