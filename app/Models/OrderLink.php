<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLink extends Model
{
    use HasFactory;

    protected $table = "order_link";

    protected $fillable = ['customer_id', 'business_id', 'order_id'];

    public function customer() 
    {
        return $this->belongsTo(Customer::class, "customer_id");
    }

    public function business() 
    {
        return $this->belongsTo(Business::class, "business_id");
    }

    public function order() 
    {
        return $this->belongsTo(Order::class, "order_id");
    }

}
