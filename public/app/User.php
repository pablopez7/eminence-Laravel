<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    const USUARIO_VERIFICADO = '1';
    const USUARIO_NO_VERIFICADO = '0';

    protected $table = 'users';
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'verified', 'verification_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'verification_token',
    ];

    /**
     * Mutador
     *
     * guarda todo en minuscula
     *
     * pero cuando la envia la convierte.
     *
     */
    public function setNameAttribute($valor){
        $this->attributes['name'] = strtolower($valor);
    }

    public function getNameAttribute($valor){
        return ucwords($valor);
    }

    public function setEmailAttribute($valor){
        $this->attributes['email'] = strtolower($valor);
    }


    public function esVerificado()
    {
        return $this->verified == User::USUARIO_VERIFICADO;
    }

    public static function generarVerificationToken()
    {
        return str_random(40);
    }

    public function categories(){
        return $this->hasMany(Catalogue::class);
    }
}
