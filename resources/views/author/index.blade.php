@extends('layouts.base')

@section('body')
    {{-- {{dump($authors)}} --}}
    <a class="btn btn-primary" href="{{ route('author.create') }}" role="button" aria-disabled="true">add author</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">author id</th>
                <th scope="col">Name</th>
                <th scope="col">Date of Birth</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>{{ $author->date_of_birth }}</td>
                    <td>{{ $author->img_path }}</td>
                    <td><a href="{{ route('author.edit', $author->id) }}"><i class="fas fa-edit"></i></a><a
                            href="{{ route('author.delete', $author->id) }}"><i class="fas fa-trash"
                                style="color:red"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
