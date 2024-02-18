@extends('layouts.app')

@section('content')
    <h1>Create Book</h1>
    <form method="post" action="{{ route('book.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="name">Book Name</label>
            <input type="text" id="name" name="name" placeholder="Name"/>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" id="price" name="price" placeholder="Price"/>
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="text" id="stock" name="stock" placeholder="Stock"/>
        </div>
        <div>
            <label for="img_path">Cover Page</label>
            <input type="file" id="img_path" name="img_path"/>
        </div>
        <div>
            <label for="author_id">Author:</label>
            <select name="author_id" id="author_id" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="Create Book"/>
        </div>
    </form>
@endsection
