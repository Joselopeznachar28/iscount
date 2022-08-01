<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget_id',
        'forma_pago',
        'tipo_pago',
        'monto',
        'comprobante',
        'budget_payment_id',
        'fecha_pago',
        'descripcion'
    ];

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
    
    public function budget(){

        return $this->belongsTo(Budget::class);

    }
}
