<?php
    namespace App\Services\Category;

    use App\Repository\Category\CategoryAdapter as RepoCategory;

class CategoryService implements CategoryAdapter {

        public $repo;

        public function __construct(RepoCategory $repo)
        {
            $this->repo = $repo;
        }

        public function AddCategory($name, $kind): bool
        {
            return $this->repo->Insert($name, $kind);
        }

        public function UpdateCategory($id, $data): bool
        {
            if (!is_array($data)){
                return false;
            }

            if(!isset($data['name']) || !isset($data['kind'])){
                return false;
            }

            return $this->repo->Update($id, $data);
        }

        public function DeleteCategory($id): bool
        {
            return $this->repo->Delete($id);
        }

        public function GetAllCategory()
        {
            return $this->repo->GetAll();
        }
    }
