<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Resort extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $table   = 'resorts';

    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }

    public function reservations()
    {
        return $this->belongsTo('App\Reservation');
    }
}