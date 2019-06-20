<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book {{ $book->name }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">-->
    
</head>
<body>

<style>
    body 
    {
    background-color: rgb(39, 43, 48);
    }

    h1
    {
        color: white;
    }
</style>

    <div class="container">
        <h1>Seeing book {{ $book->name }}</h1>
        <h4><a href="{{ route('BookIndex') }}">Go to list of books</a></h4>
        <div class="row">
            

            <div class="panel panel-default" style="width: 50rem;">
                <div class="panel-heading"><strong>Book Name: </strong>{{ $book->name }}</div>
                <div class=" panel-body "><strong>Book Id: </strong>{{ $book->id }}</div>
                <div class="panel-body"><strong>Book Category: </strong>{{ $book->category }}</div>
                <div class="panel-body"><strong>Book Description: </strong>{{ $book->description }}</div>
                <div class="panel-body"><strong>Book Quantity: </strong>{{ $book->manyBooks }}</div>

                <div class="panel-footer">
                    <a class="btn btn-primary" href="{{ asset('users/edit/'. $book->id) }}">Edit</a>

                    <form action="{{ asset('users/delete/'. $book->id) }}" method="post">
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


    
</body>
</html>