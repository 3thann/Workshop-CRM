<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $table = "business";

    protected $fillable = [
        'name'
    ];

    protected $guarded = ['id'];

    public function customers()
    {
        return $this->HasMany(Customer::class);
    }

    public static function boot()
    {
        parent::boot();

        static::deleting(function ($business) {
            if ($business->id === 1) {
                return false;
            }
        });
    }
}
