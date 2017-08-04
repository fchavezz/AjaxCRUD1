<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    // Y el nombre de la tabla ????  protected $table = 'my_table_name_was_here';
    public $fillable = ['name','details'];
}

