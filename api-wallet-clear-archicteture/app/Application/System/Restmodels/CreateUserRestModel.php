<?php

namespace Application\System\Restmodels;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRestModel extends FormRequest {

    public ?string $name;
    public ?string $email;
    public ?string $password;

    public function __construct(?string $name = null, ?string $email = null, ?string $password = null) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

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
            'name' => 'required:string',
            'email' => 'required|string',
            'password' => 'required|string',
        ];
    }


}