<?php
    namespace App\Services\Category;

    interface CategoryAdapter {
        public function AddCategory($name, $kind) : bool;
        public function UpdateCategory($id, $data) : bool;
        public function DeleteCategory($id) : bool;
        public function GetAllCategory();
    }
