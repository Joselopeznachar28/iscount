<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = [
        'name',
        'identification',
        'email',
        'contact',
        'description'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    use HasFactory;
}
