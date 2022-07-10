<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Budget extends Model
{
    protected $fillable = [
        'acquisition_id',
        'provider_id',
        'quantity',
        'unitPriceBs',
        'totalPriceBs',
        'unitPriceDollar',
        'totalPriceDollar',
        'observations',
    ];

    public function acquisition(){

        return $this->belongsTo(Acquisition::class);
        
    }

    public function provider(){

        return $this->belongsTo(Provider::class);
        
    }

    public function budgetProducts(){

        return $this->hasMany(BudgetProduct::class);
        
    }

    use HasFactory;
}
