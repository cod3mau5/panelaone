<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClaseServicio extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $table   = 'clase_servicios';
}