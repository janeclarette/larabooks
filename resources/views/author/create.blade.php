@extends('layouts.app')

@section('content')
    <h1>Create Author</h1>
    <form method="post" action="{{ route('author.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="name">Author Name</label>
            <input type="text" id="name" name="name" placeholder="Name"/>
        </div>
        <div>
            <label for="date_of_birth">Date Of Birth</label>
            <input type="date" id="date_of_birth" name="date_of_birth"/>
        </div>
        <div>
            <label for="img_path">Author Image</label>
            <input type="file" id="img_path" name="img_path"/>
        </div>
        <div>
            <input type="submit" value="Create Author"/>
        </div>
    </form>
@endsection
