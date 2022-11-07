<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'amount',
        'status',
        'billed_dated',
        'paid_dated'
    ];


    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}
