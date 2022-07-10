<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'type_identification',
        'identification',
        'email',
        'contact',
        'description'
    ];


    public function budget(){

        return $this->hasMany(Budget::class);
        
    }

    
}
