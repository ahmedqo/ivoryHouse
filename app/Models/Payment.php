<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation',
        'ref',
        'paymentId',
        'transactionId',
        'amount',
        'auth',
        'authCode',
        'result',
        'postDate'
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class, 'reservation', 'id');
    }
}
