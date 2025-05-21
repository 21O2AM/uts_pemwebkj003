<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Fakultas extends Model
{
    use Hasfactory;
    protected $table = 'fakultas';
    protected $fillable = [
        'kode_fakultas',
        'nama_fakultas',
        'dekan',
        'jumlah_prodi',
        
    ];
}
