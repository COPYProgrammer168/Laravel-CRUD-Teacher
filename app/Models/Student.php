<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

 class Student extends Model{
    //protected $table = 'tbl_student'; // custom table name
    protected $primaryKey = 'sid'; // custom primary key
   // protected $incrementing = false; //set to false if the primary key is not incrementing
    protected $fillable = ['name'];
    // public $timestamps = false; //set to false if you don't want created_at & updated_at
 }
