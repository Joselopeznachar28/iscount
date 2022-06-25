<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetProduct extends Model
{
    protected $fillable = [
        //
    ];

    public function budget(){
        return $this->belongsTo(Budget::class);
    }

    use HasFactory;
}
