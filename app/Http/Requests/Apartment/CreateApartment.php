<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateApartment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->hasRole('proprietario');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'indirizzo'=>'string|required|max:255',
            'prezzogiorno'=>'numeric|required',
            'numerocamere'=>'numeric|required',
            'postiletto'=>'numeric|required',
            'usocucina'=>'boolean|required',
            'parcheggio'=>'boolean|required',
            'note'=>'string|required|max:255',
            'id_quartiere'=>'numeric|exists:neighborhoods,id',
            'id_proprietario'=>'numeric|exist:user,id'
        ];
    }
}
