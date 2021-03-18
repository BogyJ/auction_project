<?php
    namespace App\Controllers;

    class AuctionController extends \App\Core\Controller {

        public function show($id) {
            $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
            $auction = $auctionModel->getById($id);

            if (!$auction) {
                header('Location: /');
                exit;
            }

            $this->set('auction', $auction);

            $lastOfferPrice = $this->getLastOfferPrice($id);
            if (!$lastOfferPrice) {
                $lastOfferPrice = $auction->starting_price;
            }

            $this->set('lastOfferPrice', $lastOfferPrice);

            $auctionViewModel = new \App\Models\AuctionViewModel($this->getDatabaseConnection());

            $ipAddress = filter_input(INPUT_SERVER, 'REMOTE_ADDR');
            $userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT');

            $auctionViewModel->add(
                [
                    'auction_id' => $id,
                    'ip_address' => $ipAddress,
                    'user_agent' => $userAgent
                ]
            );

        }

        private function getLastOfferPrice($auctionId) {
            $offerModel = new \App\Models\OfferModel($this->getDatabaseConnection());
            $offers = $offerModel->getAllByAuctionId($auctionId);
            $lastPrice = 0;

            foreach ($offers as $offer) {
                if ($lastPrice < $offer->price) {
                    $lastPrice = $offer->price;
                }
            }

            return $lastPrice;
        }


    }

