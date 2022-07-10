<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    public function budgetProducts(){
        return $this->hasMany(budgetProducts::class);
    }

    use HasFactory;
}
