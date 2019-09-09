<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    // protected $guarded = [];
    protected $fillable = ['first_name', 'last_name','email', 'company_name'];

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
