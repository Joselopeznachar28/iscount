<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acquisition extends Model
{
    protected $fillable = [
        'department_id',
        'date_acquisition',
        'date_max',
        'description',
        'acquisition_code',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function budgets(){
        return $this->hasMany(Budget::class);
    }

    use HasFactory;
}
