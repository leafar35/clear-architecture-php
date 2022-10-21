<?php

namespace App\Http\Controllers\Expanses\Restmodels;

class ExpanseRestModel {

    public int $id;
    public string $description;
    public float $amount;
    public string $type;
    public string $frequency;
    public string $date;

    public function __construct(int $id, string $description, float $amount, string $type, string $frequency, string $date) {
        $this->id = $id;
        $this->description = $description;;
        $this->amount = $amount;
        $this->type = $type;
        $this->frequency = $frequency;
        $this->date = $date;
    }

}