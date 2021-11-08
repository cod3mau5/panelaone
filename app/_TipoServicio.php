<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoServicio extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];
    protected $table   = 'tipo_servicios';

    public function listTipos()
    {
        return [
                'ow'=>'One Way',
                'rt'=>'Round Trip',
                'os'=>'Open Service',
                'ws'=>'One Way Salida',
                'wh'=>'One Way Hotel'
            ];
    }
}
