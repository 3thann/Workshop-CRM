<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customer";

    protected $fillable = ['last_name', 'first_name', 'mail', 'phone_number', 'is_dead'];

    public function business_id()
    {
        return $this->belongsTo(Business::class, "business_id");
    }

    public function status_id()
    {
        return $this->belongsTo(Status::class, "status_id");
    }
}