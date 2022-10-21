<?php

namespace Domain\Expanses\DataProviders;

use Domain\Expanses\Entities\ExpanseEntity;

abstract class ExpansesDataProvider {

    abstract public function find(?int $id);
    
    abstract public function create(ExpanseEntity $entity): ExpanseEntity;

    abstract public function Update(ExpanseEntity $entity): ExpanseEntity;

    abstract public function delete(int $id): bool;

}