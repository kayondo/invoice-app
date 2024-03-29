<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'details', 'units', 'unit_price', 'customer_id'
    ];

    public function products()
    {
        return $this->hasMany('App\Product');
    }

}
