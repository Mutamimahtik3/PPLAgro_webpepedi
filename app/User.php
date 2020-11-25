<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public $timestamp = false;
    protected $fillable = [
        'name', 'email', 'password', 'noHp', 'alamat', 'username', 'pekerjaan', 'jenisKelamin', 'id_role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }

    public function hasRole($role)
    {
        return $this->role()->where('name', $role)->count() == 1;
    }

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'user_id');
    }

    public function kandang()
    {
        return $this->hasMany(Penjadwalan::class, 'user_id');
    }
}
