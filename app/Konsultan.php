<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'konsultan';

    protected $fillable = ['nama_konsultan'];

    public function users()
    {
        return $this->hasMany(User::class, 'konsultan_id');
    }
}
