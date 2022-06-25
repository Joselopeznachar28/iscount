<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        //
    ];

    public function acquisition(){
        return $this->belongsTo(Acquisition::class);
    }

    public function budgetproducts(){
        return $this->hasMany(BudgetProduct::class);
    }

    use HasFactory;
}
