<?php
    namespace App\Repository\Category;

    interface CategoryAdapter {
        public function Insert($name, $kind) : bool;
        public function Update($id, $data) : bool;
        public function Delete($id) : bool;
        public function GetAll();
    }
