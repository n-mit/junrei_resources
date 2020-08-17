<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $dates = ['create_date'];
    public $primaryKey = 'admin_id';
    public $timestamps = false;
}
