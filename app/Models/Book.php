<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use laravel\Scout\Searchable;
class Book extends Model
{
    
    use HasFactory; //can add Searchable as well
    protected $table ='books';
    protected $primaryKey = 'id';
    protected $fillable = ['isbn','name','genre','author','description'];

}
