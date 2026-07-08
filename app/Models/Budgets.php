<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budgets extends Model
{
    protected $table = 'budgets';
    protected $primaryKey = 'id_budget';
    protected $fillable = [
        'id_budget',
        'budget_name',
        'budget_amount',
    ];
    protected $foreignKey = [
        'id_category',
        'id_user',
    ];
}
