<?php
/**
 * User: Gordondalos
 * Date: 10.02.2019
 * Time: 18:33
 */

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord {
    public static function tableName() {
        return 'product';
    }

    public function getCategories(){
        // первый параметр это название класса, второй это массив из связываемого поля  id
        return $this->hasOne(Category::class, ['id'=> 'categoryId']);
    }
}