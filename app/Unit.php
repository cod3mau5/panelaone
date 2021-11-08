<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class Unit extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
}
