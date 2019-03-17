<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LibrarySettings extends Model
{
    protected $table = 'library_settings';
    protected $fillable = ['noofdays','defaultfine'];
}
