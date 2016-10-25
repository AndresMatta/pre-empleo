<?php

namespace Formulario\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuestionarioRequest extends FormRequest
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
        'nombre' => 'required','identificacion' => 'required','edad' => 'required',
        'estado_civil' => 'required','nacionalidad' => 'required','residencia' => 'required',
        'puesto' => 'required','empresa' => 'required',
        'p1' => 'required', 'p2' => 'required','p3' => 'required',
        'p4' => 'required','p5' => 'required','p6' => 'required',
        'p7' => 'required','p8' => 'required','p9' => 'required',
        'p10' => 'required','p11' => 'required','p12' => 'required','p13' => 'required',
        'p14' => 'required',
        'p15a' => 'required','p15b' => 'required','p15c' => 'required','p15d' => 'required',
        'p15e' => 'required','p15f' => 'required','p15g' => 'required','p15h' => 'required',
        'p15i' => 'required','p15j' => 'required',
        'p16' => 'required',
        'p17a' => 'required','p17b' => 'required','p17c' => 'required','p17d' => 'required',
        'p17e' => 'required','p17f' => 'required','p17g' => 'required','p17h' => 'required',
        'p18' => 'required','p19' => 'required','p20' => 'required','p21' => 'required',
        'p22' => 'required','p23' => 'required','p24' => 'required','p25' => 'required',
        'p26' => 'required','p27' => 'required','p28' => 'required','p29' => 'required',
        'p30' => 'required','p31' => 'required','p32' => 'required','p33' => 'required',
        'e1' => 'required','e2' => 'required','e3' => 'required','e4' => 'required',
        'e5' => 'required','e6' => 'required','e7' => 'required','e8' => 'required',
        'e9' => 'required','e10' => 'required','e11' => 'required','e12' => 'required',
        'e13' => 'required', 'condicion' => 'required'
        ];
    }
}
