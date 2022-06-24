<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familiar extends Model
{
    protected  $fillable =[
        'socio_id',
        'name',
        'type',
        'lastname',
        'identification',
    ];

    public function socio(){
        return $this->belongsTo(Socio::class);
    }

    use HasFactory;
}
