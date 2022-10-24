<?php

namespace Application\Expanses\Providers\Repository;

use Application\Expanses\Models\ExpansesModel;

class ExpansesRepository extends ExpansesModel {

    public $timestamps = false;

    protected $table = 'expanses';    

    protected $fillable = ['description', 'amount', 'type', 'frequency', 'date'];

}