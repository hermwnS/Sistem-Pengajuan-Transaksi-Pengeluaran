<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'id_user',
        'email',
        'password'
    ];
    protected $foreignKey = [
        'id_roles',
        'id_category',
        'id_approval',
        'id_budget',
        'id_submission',
        'id_payment',
    ];
}
