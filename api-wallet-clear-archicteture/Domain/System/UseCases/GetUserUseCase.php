<?php

namespace Domain\System\UseCases;

abstract class GetUserUseCase {

  abstract public function execute(?int $id) : array;

}