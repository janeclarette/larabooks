<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Category</h1>
    <form method="post" action="{{ route('category.store') }}">
        @csrf
        @method('post')
        <div>
            <label>Category Name</label>
            <input type="text" name="category_name" placeholder="name"/>
        </div>

        <div>
            <input type="submit" value="create category"/>
        </div>
        
    </form>
</body>
</html>