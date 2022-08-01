<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected  $fillable =[
        'socio_id',
        'name',
        'type',
        'lastname',
        'identification',
        'tipo_identification'
    ];

    public function socio(){
        return $this->belongsTo(Socio::class);
    }
    use HasFactory;
}
