<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id_payment';
    protected $fillable = [
        'id_payment',
        'payment_name',
        'payment_amount',
    ];
    protected $foreignKey = [
        'id_submission',
        'id_budget',
        'id_approval',
        'id_category',
        'id_user',
    ];
}
