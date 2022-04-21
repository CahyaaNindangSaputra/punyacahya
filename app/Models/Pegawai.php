<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = '_Pegawai';
    protected $primaryKey = 'id';
    protected $fillable = ['Nama','Jabatan', 'Umur', 'jk','Alamat'
 ];
}
