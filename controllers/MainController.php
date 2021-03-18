<?php
    namespace App\Controllers;

    class MainController extends \App\Core\Controller {

        public function home() {
            $categoryModel = new \App\Models\CategoryModel($this->getDatabaseConnection());
            $categories = $categoryModel->getAll();
            $this->set('categories', $categories);

            $staraVrednost = $this->getSession()->get('neki_kljuc', '/');
            $this->set('podatak', $staraVrednost);
        }



    }

