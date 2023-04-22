<?php

namespace sisTransport\Http\Requests;

use sisTransport\Http\Requests\Request;

class AfiliadoFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ci'=>'required',
            'nombre'=>'required|max:30',
            'apellido_paterno'=>'required|max:30',
            'apellido_materno'=>'required|max:30',
            'direccion'=>'required|max:50',
            'celular'=>'required|numeric',
            'login'=>'required|max:30',
            'password'=>'required|max:30',
            'placa_vehiculo'=>'required|max:8',
            'fecha_ingreso'=>'required|date',
            'foto_afiliado'=>'mimes:jpeg,bmp,png'

        ];
    }
}
