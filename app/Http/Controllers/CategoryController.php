<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');

    }
    public function create()
    {
        return view('category.create');
        
    }
    public function store(Request $request)
    {
        $category = new Category();
        $category->category_name = trim($request->category_name);
        $category->save();
        return Redirect::route('category.index');
    }
}
