<?php

namespace App\Models;

use Exception;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected  $fillable =[
        'name',
        'lastname',
        'typeIdentification',
        'identification',
        'email',
        'address',
        'membership',
    ];

    public function families(){
        return $this->hasMany(Family::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function isActive(){
        if(!$this->payments()->count()){
            return false;
        }

        $lastPayment = $this->payments()->latest()->first();

        $end         = $lastPayment->fecha_vencimiento;
        
        $now         = now();
        
        //Realiza la comparacion entre 2 fechas, $end debe ser mayor o igual a $now;
        return $end->greaterThanOrEqualTo($now); // bool(false)
    }

    /*protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->membership = (string) Str::uuid();
            } catch (Exception $e) {
                abort(500, $e->getMessage());
            }
        });
    }*/


}
