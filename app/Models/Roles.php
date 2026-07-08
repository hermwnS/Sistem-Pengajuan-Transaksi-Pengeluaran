<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_roles';
    protected $fillable = [
        'id_roles',
        'name'
    ];
}
