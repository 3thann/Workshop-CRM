<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";

    protected $fillable = [
        'last_name',
        'first_name',
        'email',
        'phone_number',
        'is_dead',
        'business_id',
        'status_id',
        'contacted'
    ];

    public function business()
    {
        return $this->belongsTo(Business::class, "business_id");
    }

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id");
    }

    public function orderlink() 
    {
        return $this->hasMany(OrderLink::class, "customer_id");
    }
}
