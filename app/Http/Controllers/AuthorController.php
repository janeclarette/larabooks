<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Redirect; // Add this line

class AuthorController extends Controller
{
    public function index()
    {
        return view('author.index');

    }
    public function create()
    {
        return view('author.create');
        
    }
    public function store(Request $request)
    {
        $author = new Author();
        $author->name = trim($request->name);
        $author->date_of_birth = $request->date_of_birth;
        $author->img_path = $request->img_path;
        $author->save();
        return Redirect::route('author.index');
    }
}
