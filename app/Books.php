<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //A que tabla hace referencia este modelo
    protected $book = 'books';

    //Loos campso que son asignables masivamente
    protected $fillable = 
    [
        'name', 'author', 'category', 'description', 'manyBooks', 'published_date', 'user'
    ];

    /*public function user()
    {
        $this->belongsTo('App\User');
    }*/
}
