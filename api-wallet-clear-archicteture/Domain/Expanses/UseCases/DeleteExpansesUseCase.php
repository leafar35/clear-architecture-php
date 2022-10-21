<?php

namespace Domain\Expanses\UseCases;

abstract class DeleteExpansesUseCase {

  abstract public function execute(int $id) : bool;

}