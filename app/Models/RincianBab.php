<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RincianBab extends Model
{
    use HasFactory;
    protected $table = 'rincian_bab';
    protected $fillable = ['video_url'];
}
