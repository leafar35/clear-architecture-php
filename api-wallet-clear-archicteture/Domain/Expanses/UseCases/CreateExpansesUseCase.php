<?php

namespace Domain\Expanses\UseCases;

use Domain\Expanses\Entities\ExpanseEntity;

abstract class CreateExpansesUseCase {

  abstract public function execute(ExpanseEntity $entity) : ExpanseEntity;

}