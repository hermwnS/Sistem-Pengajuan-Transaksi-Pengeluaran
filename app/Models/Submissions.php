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
        'submission_amount',
        'id_budget',
        'id_category',
        'id_user',
        'id_approval',
    ];
}
