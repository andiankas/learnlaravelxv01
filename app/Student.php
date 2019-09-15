<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    //
    use SoftDeletes;
    protected $table = 'tbl_student';
    protected $fillable = ['nama','nip','email','jurusan'];
}
