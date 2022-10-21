<?php

namespace App\Http\Controllers\Expanses\Resources;

use App\Http\Controllers\Expanses\Restmodels\ExpanseRestModel;

interface ExpansesResource {

    public function findAll();

    public function findOne(int $id): ExpanseRestModel;

    public function create(ExpanseRestModel $restmodel): ExpanseRestModel;

    public function update(int $id, ExpanseRestModel $restmodel): ExpanseRestModel;

    public function delete(int $id): bool;
  
}