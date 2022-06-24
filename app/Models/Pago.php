<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{

    protected  $fillable =[
        'socio_id',
        'forma_pago',
        'tipo_pago',
        'monto',
        'comprobante',
        'fecha_vencimiento'
    ];


    public function socio(){
        return $this->belongsTo(Socio::class);
    }
    use HasFactory;
}
