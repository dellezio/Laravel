<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    public $timestamps = false;
    // protected $table = 'students';
    protected $primaryKey = 'id_a';
    protected $fillable = ['judul_43','abstrak_43'];
}
