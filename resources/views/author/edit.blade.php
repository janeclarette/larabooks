@extends('layouts.base')

@section('body')
    <h1>Edit Author</h1>
    <div class="form-group" >
    <form method="post" action="{{ route('author.update', $author->id) }}" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Author Name</label>
            <input type="text" class="form-control"  id="name" name="name" placeholder="name" value="{{ $author->name }}"/>
        </div>
        <div>
            <label for="date_of_birth">Date Of Birth</label>
            <input type="date" class="form-control"  id="date_of_birth" name="date_of_birth" value="{{ $author->date_of_birth }}"/>
        </div>
        <div>
            <label for="img_path">Author Image</label>
            <input type="file" class="form-control"  id="img_path" name="img_path"/>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update Author</button>
        </div>

    </form>
    </div>
@endsection
