<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $table = "action";

    protected $fillable = ['customer_id', 'business_id', 'description', 'date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
