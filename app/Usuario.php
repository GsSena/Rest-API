<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    protected $hidden = ['id','senha'];

    protected $fillable = ['login','nome','senha','email'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuarios';
}
