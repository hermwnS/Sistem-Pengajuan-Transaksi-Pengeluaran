<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id_category';
    protected $fillable = [
        'id_category',
        'category_name',
    ];
    protected $foreignKey = [
        'id_submission',
        'id_user',
    ];
}
