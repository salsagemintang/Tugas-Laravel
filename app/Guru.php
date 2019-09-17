<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    
    protected $fillable=[
        'id',
        'nama_guru',
        'tanggal_lahir',
        'jenis_kelamin',
       'fotoGuru'
    ];

    public function kelas(){
        return $this->belongsTo('App\Kelas','id_kelas');
    }
}