<?php

namespace Domain\Expanses\UseCases;

abstract class FindExpansesUseCase {

  abstract public function execute(?int $id);

}