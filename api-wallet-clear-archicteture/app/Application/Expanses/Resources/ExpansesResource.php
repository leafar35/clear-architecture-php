<?php

namespace Application\Expanses\Resources;

use Application\Expanses\Restmodels\CreateExpanseRestModel;
use Application\Expanses\Restmodels\ExpanseRestModel;
use Illuminate\Http\JsonResponse;

interface ExpansesResource {

    public function findAll();

    public function findOne(int $id): JsonResponse;

    public function create(CreateExpanseRestModel $restmodel): JsonResponse;

    public function update(ExpanseRestModel $restmodel): JsonResponse;

    public function delete(int $id): JsonResponse;
  
}