<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'email',
        'password',
        'id_roles'
    ];
}
