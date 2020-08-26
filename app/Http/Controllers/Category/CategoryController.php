<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Services\Category\CategoryAdapter;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public $category;

    public function __construct(CategoryAdapter $category)
    {
        $this->category = $category;
    }

    public function index(Request $req)
    {
        $data = $this->category->GetAllCategory();

        return view('category', ['datas' => $data]);
    }

    public function newCategory(Request $req)
    {
        return view('newCategory');
    }

    public function insertCategory(Request $req)
    {
        $this->category->AddCategory($req->name, $req->type_id);
        return redirect('/category');
    }

    public function deleteCategory(Request $req)
    {
        $this->category->DeleteCategory($req->id);
        return redirect('/category');
    }

    public function updateCategory(Request $req)
    {
        return view('updateCategory', ['request' => $req]);
    }

    public function confirmCategory(Request $req)
    {
        $this->category->UpdateCategory($req->id, ['name' => $req->name, 'kind' => $req->type_id]);
        return redirect('/category');
    }
}
