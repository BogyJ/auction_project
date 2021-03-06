<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    class CategoryModel extends Model {
        protected function getFields(): array {
            return [
                'category_id' => Field::editableInteger(11),
                'name'        => Field::editableString(255)
            ];
        }



    }
