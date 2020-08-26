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

        return "oke";
    }
}
