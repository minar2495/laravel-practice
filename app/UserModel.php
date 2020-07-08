<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "users_table" ;
    public $timestamps = false;
}
