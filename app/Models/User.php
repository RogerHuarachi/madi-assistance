<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'vacation', 'phone', 'email', 'password', 'agency_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function inputs()
    {
        return $this->hasMany(Input::class);
    }

    public function outputs()
    {
        return $this->hasMany(Output::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function absences()
    {
        return $this->hasMany(Absence::class);
    }

    public function vacaciones(){
        $vacaciones = $this->absences()->where('type', 'Vacaciones')->get();
        return $vacaciones;
    }

    public function subito(){
        $subito = $this->absences()->where('type', 'Subito')->get();
        return $subito;
    }

    public function baja(){
        $baja = $this->absences()->where('type', 'Baja Medica')->get();
        return $baja;
    }

    public function maternidad(){
        $maternidad = $this->absences()->where('type', 'Maternidad')->get();
        return $maternidad;
    }
}
