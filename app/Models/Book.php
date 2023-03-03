<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'publication_year'];

    // Pivot table
    // Define relationship to the author
    public function author() {
        return $this->hasManyThrough(
            '\App\Models\Author',
            '\App\Models\BookAuthor',
            'book_id', // Optional to be put
            'id', // Optional to be put
            'id', // Optional to be put
            'author_id' // Optional to be put
        );
    }
}
