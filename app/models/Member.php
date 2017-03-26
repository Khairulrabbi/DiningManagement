<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
       'first_name', 'last_name', 'address', 'email', 'password'
    ];
    
    protected  $hidden = [
        'password', 'remember_token'
    ];
    public function setPasswordAttribute($password){   
        $this->attributes['password'] = bcrypt($password);
    }
    
    public static function getMemberList() {
        echo 'Hello Bangladesh';
    }
    
}
