<?php

namespace Application\Expanses\Restmodels;

use Illuminate\Foundation\Http\FormRequest;

class ExpanseRestModel extends FormRequest {

    public ?int $id;
    public ?string $description;
    public ?float $amount;
    public ?string $type;
    public ?string $frequency;
    public ?string $date;

    public function __construct(?int $id = null, ?string $description = null, ?float $amount = null, ?string $type = null, ?string $frequency = null, ?string $date = null) {
        $this->id = $id;
        $this->description = $description;;
        $this->amount = $amount;
        $this->type = $type;
        $this->frequency = $frequency;
        $this->date = $date;
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
            'description' => 'required:string',
            'amount' => 'required|numeric',
            'type' => 'required|string',
            'frequency' => 'required|string',
            'date' => 'required|string'
        ];
    }


}