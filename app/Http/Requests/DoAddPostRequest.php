<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoAddPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:5|max:255',
            'slug'=>['required','unique:posts'],
            'content'=>'required',
            'category'=>'required'
        ];
    }
    // función para mostrar mensajes personalizados cuando surge un error en un campo especificado
    //combinamos esta función con la de modificación del nombre del elemento mostrado
    public function messages(){
        return [
            'title.required'=>'El :attribute es obligatorio'
        ];
    }

    // Función que cambia el nombre del elemento por uno indicado a la hora de mostrar los mensajes de error
    public function attributes(){
        return [
            'title'=> 'name'
        ];
    }
}
