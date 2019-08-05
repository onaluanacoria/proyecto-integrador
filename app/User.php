<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class User extends Authenticatable
{

    use HasRolesAndPermissions;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     // agregamos los campos que deseamos que se escriban en base de datos (en este caso last_name)
    protected $fillable = [
        'name', 'last_name', 'birth_year','email', 'password','profile_image'
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

    public function GetImageAttribute()
    {
        return $this->profile_image;
    }
    
}
