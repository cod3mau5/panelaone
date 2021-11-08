<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Zone extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function resorts()
    {
        return $this->hasMany('App\Resort');
    }
}