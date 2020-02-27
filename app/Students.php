<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';
    protected $fillable = ['nama','nim','prodi','jurusan','kelas','email','alamat'];
}

