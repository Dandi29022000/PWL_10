<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa_MataKuliah extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa_matakuliah';

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'Nim');
    }
    
    public function matakuliah(){
        return $this->belongsTo(MataKuliah::class);
    }
}
