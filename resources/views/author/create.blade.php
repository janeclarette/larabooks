<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Author</h1>
    <form method="post" action="{{ route('author.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Author Name</label>
            <input type="text" name="name" placeholder="name"/>
        </div>
        <div>
            <label>Date Of Birth </label>
            <input type="date" name="date_of_birth" placeholder="price"/>
        </div>
        <div>
            <label>Author Image</label>
            <input type="file" name="img_path" placeholder="image"/>
        </div>
        <div>
            <input type="submit" value="create author"/>
        </div>
    </form>
</body>
</html>