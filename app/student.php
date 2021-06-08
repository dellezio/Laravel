<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    // protected $table = 'students';
    protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','agama','alamat'];
}
