<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;
    protected $fillable = ['paragraf', 'judul1','isi1','judul2','isi2','judul3','isi3', 'judul4', 'isi4','judul5', 'isi5','judul6', 'isi6'];
}
