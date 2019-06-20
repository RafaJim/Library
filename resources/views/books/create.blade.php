<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <style>
        body 
        {
            background-color: rgb(39, 43, 48);
            color: white;
        }

        h1
        {
            color: white;
        }
    </style>

    <div class="container">
        <h1>Creating a book</h1>
        <h4><a href="{{ route('BookIndex') }}">Go to list of books</a></h4>
        <hr>

        <form method="post" action="{{ route('BookStore') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="name">Book name</label>
                <input type="text" name="name" class="form-control" placeholder="Book Name" required>
            </div>

            <div class="form-group">
                <label for="author">Book author</label>
                <input type="text" name="author" class="form-control" placeholder="Book author" required>
            </div>

            <div class="form-group">
                <label for="category">Book category</label>
                <input type="text" name="category" class="form-control" placeholder="Book category" required>
            </div>

            <div class="form-group">
                <label for="description">Book description</label>
                <textarea class="form-control" name="description" cols="50" rows="10" id="description"></textarea>
            </div>

            <div class="form-group">
                <label for="manyBooks">Book quantity</label>
                <input type="text" name="manyBooks" class="form-control" placeholder="Book quantity" required>
            </div>

            <div class="form-group">
                <label for="published_date">Date of publication</label>
                <input type="text" name="published_date" class="form-control" placeholder="Date of publication" required>
            </div>

            <div class="form-group">
                <label for="user">User using the book</label>
                <input type="text" name="user" class="form-control" placeholder="User using the book" required>
            </div>

            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>
</body>
</html>