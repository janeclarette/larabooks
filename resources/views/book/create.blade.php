<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Book</h1>
    <form method="post" action="{{ route('book.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Book Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label>Price </label>
            <input type="text" name="price" placeholder="price"/>
        </div>
        <div>
            <label> Stock</label>
            <input type="text" name="stock" placeholder="stock"/>
        </div>
        <div>
            <label>Cover Page</label>
            <input type="file" name="img_path" placeholder="image"/>
        </div>
        <div>
        <label for="author_id">Author:</label>
            <select name="author_id" required>
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }}</option>
            @endforeach
            </select>
        </div>

        <div>
            <input type="submit" value="create book"/>
        </div>
    </form>
</body>
</html>