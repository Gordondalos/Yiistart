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

    // в нейминге этой функции get явялется обязательным а потом когда идет ображение важно название второй части
    // то есть будет $category->products именно продуктс а не продукт так как метод заканчивается на с

    // это отложенная загружка, но чтобы не пользовать лучше брать жадную загрузку
    public function getProducts(){
        // первый параметр это название класса, второй это массив из связываемого поля в продуктах и текушему полю
        return $this->hasMany(Product::class, ['categoryId'=> 'id']);
    }

}