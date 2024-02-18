<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use App\Models\Book;
use App\Models\Author;


class BookController extends Controller
{
    public function index()
    {
        return view('book.index');

    }
    public function create()
    {
        $authors = Author::all();
        return view('book.create', compact('authors'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'img_path' => 'required',
            'author_id' => 'required|exists:authors,id',

        ]);
        $newBook = Book::create($data);
        return redirect(route('book.index'));
    }
}
