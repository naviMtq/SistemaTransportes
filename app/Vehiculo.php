<?php

namespace sisTransport;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculo';

    protected $primaryKey='placa';

    public $timestamps=false;


    protected $fillable =[
    	'marca',
    	'modelo',
    	'tipo',
        'color',
        'capacidad_pj',
        'chasis',
        'password',
        'anio',
        'foto_vehiculo'
        
    ];

    protected $guarded =[

    ];
}
