<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kos extends Model
{
    use HasFactory;
    protected $table = 'kos';
    protected $fillable = [
        'id', 'kecamatan_id', 'nama_kos', 'foto_utama', 'status', 'url_map', 'owner_id', 'harga', 'jenis_sewa', 'created_by', 'updated_by', 'created_at', 'updated_at'
    ];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class, 'kecamatan_id', 'id');
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'id');
    }
}
