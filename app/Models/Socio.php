<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    protected  $fillable =[
        'name',
        'lastname',
        'typeIdentification',
        'identification',
        'email',
        'address',
        'membership',
        'status',
    ];

    public function families(){
        return $this->hasMany(Family::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    use HasFactory;
}
