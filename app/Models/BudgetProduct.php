<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetProduct extends Model
{
    protected $fillable = [
        //
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function budget(){
        return $this->belongsTo(Budget::class);
    }

    use HasFactory;
}
