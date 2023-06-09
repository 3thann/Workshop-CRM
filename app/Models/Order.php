<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "order";

    protected $fillable = ['name', 'quantity', 'date'];

    public function orderlink() 
    {
        return $this->hasMany(OrderLink::class, "order_id");
    }

}
