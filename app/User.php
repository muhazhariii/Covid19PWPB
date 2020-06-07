<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'status', 'name', 'email', 'password', 'foto',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pesanan(){
        return $this->hasMany('App\pesanan', 'user_id', 'id');
    }

    public function getAvatar(){
        if(!$this->foto){
            return asset('avatar/default.png');
        }

        return asset('avatar/' . $this->foto);
    }
}
