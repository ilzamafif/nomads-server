<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'travel_packages_id', 'users_id', 'additional_visa', 'transaction_total', 'transaction_status'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->HasMany(TransactionDetail::class, 'transaction', 'id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
