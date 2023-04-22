<?php

namespace sisTransport\Http\Controllers;

use Illuminate\Http\Request;

use sisTransport\Http\Requests;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use sisTransport\Http\Requests\VehiculoFormRequest;
use sisTransport\Vehiculo;
use DB;

class VehiculoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $vehiculo=DB::table('vehiculo')->where('marca','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('placa','desc')
            ->paginate(7);
            return view('gestion.vehiculo.index',["vehiculos"=>$vehiculo,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("gestion.vehiculo.create");
    }
    public function store (VehiculoFormRequest $request)
    {
        $vehiculo=new Vehiculo;
        $vehiculo->placa=$request->get('placa');
        $vehiculo->marca=$request->get('marca');
        $vehiculo->modelo=$request->get('modelo');
        $vehiculo->tipo=$request->get('tipo');
        $vehiculo->color=$request->get('color');
        $vehiculo->capacidad_pj=$request->get('capacidad_pj');
        $vehiculo->chasis=$request->get('chasis');
        $vehiculo->anio=$request->get('anio');
        $vehiculo->condicion='1';

        if(Input::hasFile('foto_vehiculo')){
            $file=Input::file('foto_vehiculo');
            $file->move(public_path().'/imagenes/vehiculos/',$file->getClientOriginalName());
            $vehiculo->foto_vehiculo=$file->getClientOriginalName();
        }
        $vehiculo->save();
        return Redirect::to('gestion/vehiculo');

    }
    public function show($placa)
    {
        return view("gestion.vehiculo.show",["vehiculo"=>Vehiculo::findOrFail($placa)]);
    }
    public function edit($placa)
    {
        return view("gestion.vehiculo.edit",["vehiculo"=>Vehiculo::findOrFail($placa)]);
    }
    public function update(VehiculoFormRequest $request,$placa)
    {
        $vehiculo=Vehiculo::findOrFail($placa);
        $vehiculo->placa=$request->get('placa');
        $vehiculo->marca=$request->get('marca');
        $vehiculo->modelo=$request->get('modelo');
        $vehiculo->tipo=$request->get('tipo');
        $vehiculo->color=$request->get('color');
        $vehiculo->capacidad_pj=$request->get('capacidad_pj');
        $vehiculo->chasis=$request->get('chasis');
        $vehiculo->anio=$request->get('anio');

        if(Input::hasFile('foto_vehiculo')){
            $file=Input::file('foto_vehiculo');
            $file->move(public_path().'/imagenes/vehiculos/',$file->getClientOriginalName());
            $vehiculo->foto_vehiculo=$file->getClientOriginalName();
        }
        $vehiculo->update();
        return Redirect::to('gestion/vehiculo');
    }
    public function destroy($placa)
    {
        $vehiculo=Vehiculo::findOrFail($placa);
        $vehiculo->condicion='0';
        $vehiculo->update();
        return Redirect::to('gestion/vehiculo');
    }

}
