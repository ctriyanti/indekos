<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatan';
    protected $fillable = [
        'id', 'kecamatan', 'description', 'status', 'created_by', 'updated_by', 'created_at', 'updated_at' 
    ];
}
