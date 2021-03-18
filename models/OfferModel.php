<?php
    namespace App\Models;

    use App\Core\Model;
    use App\Core\Field;

    class OfferModel extends Model {
        protected function getFields(): array {
            return [
                'offer_id'        => Field::editableInteger(11),
                'created_at'      => Field::readonlyDateTime(),
                'auction_id'      => Field::editableInteger(11),
                'user_id'         => Field::editableInteger(11),
                'price'           => Field::editableMaxDecimal(7, 2)
            ];
        }

        public function getAllByAuctionId(int $auctionId): array {
            $items = $this->getAllByFieldName('auction_id', $auctionId);
            usort($items, function($a, $b) {
                return strcmp($a->created_at, $b->created_at);
            });

            return $items;
        }


    }
