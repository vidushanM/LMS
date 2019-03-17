<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    protected $table = 'return_books';
    protected $primaryKey = 'bookbarcode';
    protected $fillable = ['bookbarcode','issuememberid','fine'];
}
