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
        
            <h1>Update Book</h1>
            <h4><a href="{{ route('BookIndex') }}">Go to list of books</a></h4>
            <hr>

                {!! Form::model($book, ['method' => 'PUT', 'action' => ['BookController@update', $book->id]]) !!}
               
                    

                    <div class="form-group">
                        {!! Form::label('name', 'Book Name: ') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('author', 'Book Author: ') !!}
                        {!! Form::text('author', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('category', 'Book Category: ') !!}
                        {!! Form::text('category', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('description', 'Book Description: ') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('manyBooks', 'Book Quantity: ') !!}
                        {!! Form::text('manyBooks', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('published_date', 'Date of poublication: ') !!}
                        {!! Form::text('published_date', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('user', 'User using the book: ') !!}
                        {!! Form::text('user', null, ['class' => 'form-control']) !!}
                    </div>

                    <button type="submit" class="btn btn-success">Register</button>
    </div>
</body>
</html>