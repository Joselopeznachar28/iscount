<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'socio_id',
        'forma_pago',
        'tipo_pago',
        'monto',
        'comprobante',
        'payment_id',
        'fecha_pago',
        'fecha_vencimiento',
        'descripcion',
    ];

    public function socio(){
        return $this->belongsTo(Socio::class);
    }

    use HasFactory;
}
