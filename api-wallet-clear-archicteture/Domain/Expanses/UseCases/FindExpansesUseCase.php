<?php

namespace Domain\Expanses\UseCases;

use Domain\Expanses\Entities\ExpanseEntity;

abstract class FindExpansesUseCase {

  abstract public function execute(?int $id);

}