<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    protected $table = 'kos';
    protected $fillable = [
        'id', 'kecamatan_id', 'nama_kos', 'foto_utama', 'url_map', 'owner_id', 'harga', 'jenis_sewa', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];
}
