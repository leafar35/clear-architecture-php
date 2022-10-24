<?php

namespace Application\System\Resources;

use Application\System\Restmodels\CreateUserRestModel;
use Application\System\Restmodels\UserRestModel;
use Illuminate\Http\JsonResponse;

interface UserResource {

    public function findAll();

    public function findOne(int $id): JsonResponse;

    public function create(CreateUserRestModel $restmodel): JsonResponse;

    public function update(UserRestModel $restmodel): JsonResponse;
  
}