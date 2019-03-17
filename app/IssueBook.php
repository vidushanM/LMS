<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueBook extends Model
{
    protected $table = 'issue_books';
    protected $primaryKey = 'bookbarcode';
    protected $fillable = ['bookbarcode', 'issuememberid'];
}
