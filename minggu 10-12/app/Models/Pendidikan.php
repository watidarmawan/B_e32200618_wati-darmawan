<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
   protected $table = 'pendidikan';
   protected $primarykey = 'id';
   protected $fillable =[
       'nama', 'tingkatan', 'tahun_masuk', 'tahun_keluar',
   ];
}
