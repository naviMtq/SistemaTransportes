<?php

namespace sisTransport\Http\Controllers;

use Illuminate\Http\Request;

use sisTransport\Http\Requests;
use sisTransport\Afiliado;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use sisTransport\Http\Requests\AfiliadoFormRequest;
use DB;

class AfiliadoController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $afiliado=DB::table('afiliado')->where('apellido_paterno','LIKE','%'.$query.'%')
            ->where ('condicion','=','1')
            ->orderBy('apellido_paterno','desc')
            ->paginate(7);
            return view('gestion.afiliado.index',["afiliados"=>$afiliado,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("gestion.afiliado.create");
    }
    public function store (AfiliadoFormRequest $request)
    {
        $afiliado=new Afiliado;
        $afiliado->ci=$request->get('ci');
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido_paterno=$request->get('apellido_paterno');
        $afiliado->apellido_materno=$request->get('apellido_materno');
        $afiliado->direccion=$request->get('direccion');
        $afiliado->celular=$request->get('celular');
        $afiliado->login=$request->get('login');
        $afiliado->password=$request->get('password');
        $afiliado->placa_vehiculo=$request->get('placa_vehiculo');
        $afiliado->fecha_ingreso=$request->get('fecha_ingreso');
        $afiliado->condicion='1';

        if(Input::hasFile('foto_afiliado')){
            $file=Input::file('foto_afiliado');
            $file->move(public_path().'/imagenes/afiliados/',$file->getClientOriginalName());
            $afiliado->foto_afiliado=$file->getClientOriginalName();
        }
        $afiliado->save();
        return Redirect::to('gestion/afiliado');

    }
    public function show($ci)
    {
        return view("gestion.afiliado.show",["afiliado"=>Afiliado::findOrFail($ci)]);
    }
    public function edit($ci)
    {
        return view("gestion.afiliado.edit",["afiliado"=>Afiliado::findOrFail($ci)]);
    }
    public function update(AfiliadoFormRequest $request,$ci)
    {
        $afiliado=Afiliado::findOrFail($ci);
        $afiliado->ci=$request->get('ci');
        $afiliado->nombre=$request->get('nombre');
        $afiliado->apellido_paterno=$request->get('apellido_paterno');
        $afiliado->apellido_materno=$request->get('apellido_materno');
        $afiliado->direccion=$request->get('direccion');
        $afiliado->celular=$request->get('celular');
        $afiliado->login=$request->get('login');
        $afiliado->password=$request->get('password');
        $afiliado->placa_vehiculo=$request->get('placa_vehiculo');
        $afiliado->fecha_ingreso=$request->get('fecha_ingreso');

        if(Input::hasFile('foto_afiliado')){
            $file=Input::file('foto_afiliado');
            $file->move(public_path().'/imagenes/afiliados/',$file->getClientOriginalName());
            $afiliado->foto_afiliado=$file->getClientOriginalName();
        }
        $afiliado->update();
        return Redirect::to('gestion/afiliado');
    }
    public function destroy($ci)
    {
        $afiliado=Afiliado::findOrFail($ci);
        $afiliado->condicion='0';
        $afiliado->update();
        return Redirect::to('gestion/afiliado');
    }

}
