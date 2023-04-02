<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class ArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        // if i dont put this value return from -fasle- to true once the client will send the filled form it will return 403 error
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
           
            'name'=> 'Required|min : 2',
            'genre'=> 'Required' ,
            'band'=> 'Required',
            'img' => 'Required|image',
        ];
    }

    public function messages () : array {
    return [
'name.required' => "The name field can't be empy",
'name.min' => "Name too short",
'genre.required' => "The genre field can't be empty",
'band.required' => "The band field can't be empty ",
'img.image' => "The file must be in .png or .jpg",

    ];
    }
}
