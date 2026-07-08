<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $table = 'submissions';
    protected $primaryKey = 'id_submission';
    protected $fillable = [
        'id_submission',
        'submission_name',
    ];
    protected $foreignKey = [
        'id_category',
        'id_budget',
        'id_approval',
        'id_user',
    ];
}
