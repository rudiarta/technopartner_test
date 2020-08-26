<?php
namespace App\Repository\Category;

use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryRepository implements CategoryAdapter {

        public function Insert($name, $kind): bool
        {
            $category = new Category();

            if (!DB::table('category_type')->where('id', $kind)->exists()) {
                return false;
            }

            $category->name = $name;
            $category->type_id = $kind;

            $category->save();

            return true;
        }

        public function Update($id, $data): bool
        {
            $category = Category::find($id);

            if (!DB::table('category_type')->where('id', $data['kind'])->exists()) {
                return false;
            }

            $category->name = $data['name'];
            $category->type_id = $data['kind'];

            $category->save();

            return true;
        }

        public function Delete($id): bool
        {
            $category = Category::find($id);
            $category->delete();

            return true;
        }

        public function GetAll()
        {
            return Category::get();
        }
    }
