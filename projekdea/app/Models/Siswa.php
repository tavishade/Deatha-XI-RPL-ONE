<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "id";
    protected $fillable =[
        'nis',
        'nama',
        'alamat',
        'jenis_kelamin',
        'notlp',
        'tgllhr'
    ];
    use HasFactory;
}
