<?php

namespace sisTransport\Http\Requests;

use sisTransport\Http\Requests\Request;

class VehiculoFormRequest extends Request
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
            'placa'=>'required|max:10',
            'marca'=>'required|max:30',
            'modelo'=>'required|max:30',
            'tipo'=>'required|max:30',
            'color'=>'required|max:30',
            'capacidad_pj'=>'required|numeric',
            'chasis'=>'required|max:30',
            'anio'=>'required|numeric',
            'foto_vehiculo'=>'mimes:jpeg,bmp,png',
        ];
    }
}
