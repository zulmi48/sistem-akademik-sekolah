<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    // protected $fiilable = [
    //     'nis',
    //     'nama',
    //     'jenis_kelamin',
    //     'alamat'
    // ];
    protected $guarded = [];
}
