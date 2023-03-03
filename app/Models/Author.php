<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Protected fillable can ensure that we can use create method on eloquent request 
    // $fillable attribute is an array containing fields of table which can be filled using mass-assignment
    // Mass-assignment is a process of sending an array of data that will be saved to the specified model at once. In general, you don’t need to save data on your model on one by one basis, but rather in a single process.
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'laravel_through_key',
        'created_at',
        'updated_at'
    ];
}
