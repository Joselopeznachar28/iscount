<?php

namespace App\Models;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

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

    //Castear = Transformar valores.
    protected $casts = [
        'fecha_pago' => 'datetime:Y-m-d',
        'fecha_vencimiento' => 'datetime:Y-m-d'
    ];

    /**
     * Set monto
     * Set is a mutators = Transform value 
     */
    public function setMontoAttribute($value)
    {
        $this->attributes['monto'] = $value * 100;
    }

    /**
     * Gets monto
     * Get is a Accesors
     */
    public function getMontoAttribute($value)
    {
        return $value / 100;
    }

    public function socio(){
        return $this->belongsTo(Socio::class);
    }
}
