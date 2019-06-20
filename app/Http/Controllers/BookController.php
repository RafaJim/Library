<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;

class BookController extends Controller
{
    private $path='books';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Books::all();

        return  view('books.index', ['book' => $book]);
        //return view($this->path.'.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book=new Books();
        return  view('books.create', ['book' => $book]);
        //return view($this->path.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try
        {
            $book = new Books();

            $book->name = $request->name;
            $book->author = $request->author;
            $book->category = $request->category;
            $book->description = $request->description;
            $book->manyBooks = $request->manyBooks;
            $book->published_date = $request->published_date;
            $book->user = $request->user;
            $book->save();

            return redirect()->route('BookIndex');
            //return view('books.index', ['book' => $book]);
        }
        catch(Exception $e)
        {
            return "Fatal error - ".$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*dd($book);
        return view('books.show', compact('book'));*/

        $book = Books::find($id);
        return view('books.show', compact('book'));
        //return  view('books.show', ['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('books.edit', compact('book'));
        //return view('books.edit', ['book' => $book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Books::findOrFail($id);
        $book->update($request->all());

        /*$book->name = $request->name;
        $book->author = $request->author;
        $book->category = $request->category;
        $book->description = $request->description;
        $book->manyBooks = $request->manyBooks;
        $book->published_date = $request->published_date;
        $book->user = $request->user;
        $book->save();*/

        return redirect()->route('BookIndex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();
        return redirect()->route('BookIndex');
    }
}
