<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;
    protected $fillable = ['nama_matkul','dosen_id', 'kelas_id', 'sks',];

    public function dosen(){
        return $this->belongsTo(Dosen::class,'dosen_id');
    }

    public function kelas(){
        return $this->belongsTo(Kelas::class,'kelas_id');
    }
}
