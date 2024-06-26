<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "total",
        "payment_id",
        "status",
        "address",
        "delivery_date",
    ];
}
