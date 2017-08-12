<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id',
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function fitrah()
    {
    return $this->hasMany('App\Fitrah');
    }

    public function mal()
    {
    return $this->hasMany('App\Mal');
    }

    public function amal()
    {
    return $this->hasMany('App\lain');
    }

    public function laporan()
    {
    return $this->hasMany('App\Laporan');
    }

}
