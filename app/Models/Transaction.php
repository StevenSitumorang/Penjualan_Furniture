<?php
// app/Models/Transaction.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'postal_code',
        'address',
        'unit_no',
        'city',
        'delivery_method',
        'payment_method',
    ];
}
