<?php

namespace Domain\System\UseCases;

use Domain\System\Entities\UserEntity;

abstract class UpdateUserUseCase {

  abstract public function execute(UserEntity $entity) : UserEntity;

}