<?php
    namespace App\Controllers;

    class ApiAuctionController extends \App\Core\ApiController {
        public function show($id) {
            $auctionModel = new \App\Models\AuctionModel($this->getDatabaseConnection());
            $auction = $auctionModel->getById($id);
            $this->set('auction', $auction);
        }

        

    }
