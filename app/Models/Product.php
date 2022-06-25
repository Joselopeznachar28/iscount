<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'provider_id',
        'name',
        'amount',
        'price',
        'description'
    ];

    public function provider(){
        return $this->belongsTo(Provider::class);
    }
    use HasFactory;
}
