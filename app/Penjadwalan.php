<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    protected $table = 'penjadwalan';
    protected $fillable = ['tanggal', 'waktu', 'namaProses', 'tipsDanTrik'];

    public function peternak()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
