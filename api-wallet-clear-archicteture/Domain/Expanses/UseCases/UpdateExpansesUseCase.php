<?php

namespace Domain\Expanses\UseCases;

use Domain\Expanses\Entities\ExpanseEntity;

abstract class UpdateExpansesUseCase {

  abstract public function execute(ExpanseEntity $entity) : ExpanseEntity;

}