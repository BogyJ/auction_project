<?php
    namespace App\Models;

    use App\Core\Field;

    class AuctionViewModel extends \App\Core\Model {
        protected function getFields(): array {
            return [
                'auction_view_id' => Field::editableInteger(11),
                'created_at'      => Field::readonlyDateTime(),
                'auction_id'      => Field::editableInteger(11),
                'ip_address'      => Field::editableIpAddress(),
                'user_agent'      => Field::editableString(255)
            ];
        }

        public function getAllByAuctionId(int $auctionId): array {
            return $this->getAllByFieldName('auction_id', $auctionId);
        }

        public function getAllByIpAddress(string $ipAddress): array {
            return $this->getAllByFieldName('ip_address', $ipAddress);
        }


        
    }
