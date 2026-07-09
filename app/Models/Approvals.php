<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approvals extends Model
{
    protected $table = 'approvals';
    protected $primaryKey = 'id_approval';
    protected $fillable = [
        'id_approval',
        'id_submission',
        'id_roles',
        'status',
        'catatan',
        'approved_by',
    ];
}
