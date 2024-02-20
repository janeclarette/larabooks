<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Redirect;

class AuthorController extends Controller
{
    public function index()
    {
        // Fetch all authors from the database
        $authors = Author::all();

        // Return the view with the authors data
        return view('author.index', compact('authors'));
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
        
        // Handle file upload for the image
        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $author->img_path = 'images/' . $imageName;
        }
        
        $author->save();
        return Redirect::route('author.index');
    }
    public function edit($id)
    {
        $author = Author::find($id);
        return view('author.edit', compact('author'));
    }
    
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->name = trim($request->name);
        $author->date_of_birth = $request->date_of_birth;

        // Handle file upload for the image
        if ($request->hasFile('img_path')) {
            $image = $request->file('img_path');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $author->img_path = 'images/' . $imageName;
        }

        $author->save();
        return Redirect::route('author.index');
    }
}