<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
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
    
//    Make First Character Capitalize
    public function setNameAttribute($value) {
        $this->attributes['name'] = ucfirst($value);
    }
//    Make Password Encrypted
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = md5($value);
    }
    public function getNameAttribute($value) {
        return strtoupper($value);
    }
    public function getEmailAttribute($value) {
        return strtok($value, '@');
    }
    
}
