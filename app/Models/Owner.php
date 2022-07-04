<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $table = 'owners';
    protected $fillable = [
        'id', 'nama', 'no_hp', 'alamat', 'no_ktp', 'foto', 'created_at', 'updated_at'
    ];
}
