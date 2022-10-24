<?php

namespace Domain\System\UseCases;

use Domain\System\Entities\UserEntity;

abstract class CreateUserUseCase {

  abstract public function execute(UserEntity $entity) : UserEntity;

}