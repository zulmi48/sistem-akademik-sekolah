<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = [];

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
}
