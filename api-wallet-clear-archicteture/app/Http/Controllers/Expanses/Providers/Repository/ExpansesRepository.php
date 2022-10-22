<?php

namespace App\Http\Controllers\Expanses\Providers\Repository;

use App\Http\Controllers\Expanses\Models\ExpansesModel;

class ExpansesRepository extends ExpansesModel {

    public $timestamps = false;

    protected $table = 'expanses';    

    protected $fillable = ['description', 'amount', 'type', 'frequency', 'date'];

}