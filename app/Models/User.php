<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /*
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Encriptar password

    //ACCESOR = ERMITEN ACCEDER A PROPIEDADES DE USUARIOS
    //MUTATORS = CAMBIAR PARA HACER OPERACIONES

    //Este es un mutator el bcryt

    // Para poder ejecutar de forma automatica, laravel tiene un estandar para declarar y leer un metodo automaticamente.

    //la palabra set, luego el nombre del atributo que quieres modificar y luego la palabra attribute
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
