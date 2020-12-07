<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'role','name', 'email', 'password','nohp','jenis_kelamin','alamat','pekerjaan'
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

    public function padi()
    {
        return $this->hasMany('App\Padi');
    }
    public function sender()
    {
        return $this->hasMany('App\Chat','sender_id');
    }
    public function reciever()
    {
        return $this->hasMany('App\Chat','reciever_id');
    }
}
