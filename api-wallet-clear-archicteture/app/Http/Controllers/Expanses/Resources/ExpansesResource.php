<?php

namespace App\Http\Controllers\Expanses\Resources;

use App\Http\Controllers\Expanses\Restmodels\CreateExpanseRestModel;
use App\Http\Controllers\Expanses\Restmodels\ExpanseRestModel;
use Illuminate\Http\JsonResponse;

interface ExpansesResource {

    public function findAll();

    public function findOne(int $id): ExpanseRestModel;

    public function create(CreateExpanseRestModel $restmodel): JsonResponse;

    public function update(ExpanseRestModel $restmodel): JsonResponse;

    public function delete(int $id): bool;
  
}