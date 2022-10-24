<?php

namespace Domain\System\DataProviders;

use Domain\System\Entities\UserEntity;

abstract class UserDataProvider {

    abstract public function find(?int $id);
    
    abstract public function create(UserEntity $entity): UserEntity;

    abstract public function Update(UserEntity $entity): UserEntity;

    abstract public function delete(int $id): bool;

}