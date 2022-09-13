<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['posts' => $category->getByCategory()]);
    }
}