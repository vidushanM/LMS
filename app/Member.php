<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Member extends Authenticatable
{
    protected $table = 'members';
    protected $fillable = ['firstname','lastname','memberid','memberphone','memberemail', 'password', 'isNew'];
}
