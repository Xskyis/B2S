<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $fillable = ['nama'];

    // Definisikan relasi one-to-many dengan model Bab
    public function bab()
    {
        return $this->hasMany(Bab::class, 'id_mapel', 'id');
    }
}
