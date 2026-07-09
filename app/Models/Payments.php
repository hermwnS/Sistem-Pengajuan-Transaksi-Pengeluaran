<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id_payment';
    protected $fillable = [
        'id_payment',
        'id_submission',
        'status_payment',
        'payment_name',
        'payment_amount',
        'payment_date',
    ];
}
