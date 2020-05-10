<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class remedio_idosoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_remedio' => 'required|string|min:1|max:11',
            'id_idoso' => 'required|string|min:1|max:11',
            'dosagem' => 'required|string|max:20',
            'horario' => 'required|string|max:20',
            
        ];
    }
    public function messages(){
        return [
            'id_remedio' => $data['id_remedio'],
            'id_idoso' => $data['id_idoso'],
            'dosagem' => $data['dosagem'],
            'horario' => $data['horario'],
        ];
    }
}
