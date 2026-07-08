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
        'id_budget',
        'id_category',
        'id_user',
        'id_approval',
    ];
}
