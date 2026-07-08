<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approvals extends Model
{
    protected $table = 'approvals';
    protected $primaryKey = 'id_approval';
    protected $fillable = [
        'id_approval',
        'approval_name',
        'status',
        'approved_by',
    ];
    protected $foreignKey = [
        'id_user',
        'id_submission',
        'id_budget',
        'id_category',
        'id_roles',
        'id_payment',
    ];
}
