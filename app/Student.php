<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'tbl_student';
    protected $fillable = ['nama','nip','email','jurusan'];
}
