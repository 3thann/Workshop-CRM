<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $table = "action";

    protected $fillable = ['customer_id', 'business_id', 'description'];

    public function customer()
    {
        return $this->HasMany(Customer::class);
    }
}
