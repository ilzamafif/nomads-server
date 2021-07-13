<?php

namespace App;

use App\Http\Requests\Admin\TravelPackageRequest;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['travel_packages_id', 'image'];

    protected $hidden = [];

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }
}
