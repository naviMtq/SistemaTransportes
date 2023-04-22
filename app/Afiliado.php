<?php

namespace sisTransport;

use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    protected $table='afiliado';

    protected $primaryKey='ci';

    public $timestamps=false;


    protected $fillable =[
    	'nombre',
    	'apellido_paterno',
    	'apellido_materno',
        'direccion',
        'celular',
        'login',
        'password',
        'placa_vehiculo',
        'fecha_ingreso',
        'foto_afiliado'
    ];

    protected $guarded =[

    ];
}
