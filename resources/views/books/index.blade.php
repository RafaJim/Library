<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of books</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\xampp\htdocs\proyectos-laravel\Library2\resources\styles\style.css">
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

        td
        {
            color: white;
        }
        
        .table-active
        {
            background-color: rgba(255, 255, 255, 0.075);
        }
    </style>

    <div class="container">
        <h1>List of books</h1>
        <h4><a href="{{ route('BookCreate') }}">Create a new book</a></h4>
        <hr>

        @if($book)
            <div class="container">           
                <table class="table ">
                    <thead >
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Author</td>
                            <td>Category</td>
                            <td>Publisehd date</td>
                            <td>User using the book</td>
                            <td></td>
                        </tr>
                    </thead>

                    <tbody class="table-active">
                        @foreach($book as $row)
                            <tr>
                                <td>{{ $row -> id }}</td>
                                <td>{{ $row -> name }}</td>
                                <td>{{ $row -> author }}</td>
                                <td>{{ $row -> category }}</td>
                                <td>{{ $row -> published_date }}</td>
                                <td>{{ $row -> user }}</td>

                                <td>
                                    <a href="{{ asset('users/'. $row->id) }}"  class="btn btn-info">Show</a>

                                    <form action="{{ asset('users/delete/'. $row->id) }}" method="post">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
</body>
</html>