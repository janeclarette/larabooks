@extends('layouts.app')

@section('content')
    <h1>Create Category</h1>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="category_name">Category Name</label>
            <input type="text" id="category_name" name="category_name" placeholder="Name"/>
        </div>
        <div>
            <input type="submit" value="Create Category"/>
        </div>
    </form>
@endsection
