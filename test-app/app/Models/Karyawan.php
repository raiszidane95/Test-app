<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Karyawan extends Model
{
    use SoftDeletes;
    protected $table = 'karyawans';

    protected $fillable = [
        'Nama',
        'Tgl_Lahir',
        'Gaji',
    ];
}
