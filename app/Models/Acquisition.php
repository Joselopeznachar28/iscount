<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    protected $fillable = [
        //
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function budgets(){
        return $this->hasMany(Budget::class);
    }

    use HasFactory;
}
