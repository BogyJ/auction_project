<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    class AuctionModel extends \App\Core\Model {
        protected function getFields(): array {
            return [
                'auction_id'     => Field::editableInteger(11),
                'created_at'     => Field::readonlyDateTime(),
                'title'          => Field::editableString(255),
                'description'    => Field::editableString(64*1024),
                'starting_price' => Field::editableMaxDecimal(7, 2),
                'starts_at'      => Field::editableDateTime(),
                'ends_at'        => Field::editableDateTime(),
                'is_active'      => Field::editableBit(),
                'category_id'    => Field::editableInteger(11)
            ];
        }

        public function getAllByCategoryId(int $categoryId): array {
            return $this->getAllByFieldName('category_id', $categoryId);
        }



    }
