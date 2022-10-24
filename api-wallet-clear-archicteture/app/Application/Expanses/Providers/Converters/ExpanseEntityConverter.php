<?php 

namespace Application\Expanses\Providers\Converters;

use Application\Expanses\Providers\Repository\ExpansesRepository;
use Domain\Expanses\Entities\ExpanseEntity;
use Illuminate\Database\Eloquent\Collection;

class ExpanseEntityConverter {

    public function mapToEntityArray(Collection $models) : array {
        $entity = array_map(function($model){
            return new ExpanseEntity($model['id'], $model['description'], $model['amount'], $model['type'], $model['frequency'], $model['date']);
        }, $models->toArray());
        return $entity;
    }

    public function mapToEntity(ExpansesRepository $model): ExpanseEntity {
        return new ExpanseEntity($model['id'], $model['description'], $model['amount'], $model['type'], $model['frequency'], $model['date']);
    }

}