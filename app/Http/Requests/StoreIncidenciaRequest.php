<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncidenciaRequest extends FormRequest
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
            'titulo' => 'required',
            'descripcion' => 'required',
            'prioridad' => 'required',
            'tipo_incidencia' => 'required',
            'public' => 'mimes:jpeg,png,jpg,bmp|mimetypes:application/pdf,application/msword,application/vnd.ms-excel'
        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Por favor ingrese un titulo...',
            'descripcion.required'  => 'Por Favor ingrese una descripción...',
            'prioridad.required' => 'Seleccione una prioridad...',
            'tipo_incidencia.required' => 'Seleccione un tipo de incidencia...',
            'public.mimes' => 'Solo puede subir imagenes tipo .jpg, .png, .jpeg, .bmp',
            'public.mimetypes' => 'Solo puede subir archivos tipo .pdf, .doc, .xls',
        ];
    }
}
