<?php 

namespace App\Http\Controllers\Expanses\Converters;

use App\Http\Controllers\Expanses\Restmodels\ExpanseRestModel;
use Domain\Expanses\Entities\ExpanseEntity;

class ExpanseRestModelConverter {

    public function mapToEntity(ExpanseRestModel $restmodel) : ExpanseEntity {
        return new ExpanseEntity(
            $restmodel->id,
            $restmodel->description,
            $restmodel->amount,
            $restmodel->type,
            $restmodel->frequency,
            $restmodel->date
        );
    }

    public function mapToModel(ExpanseEntity $entity) : ExpanseRestModel {
        return new ExpanseRestModel(
            $entity->id,
            $entity->description,
            $entity->amount,
            $entity->type,
            $entity->frequency,
            $entity->date
        );
    }

}