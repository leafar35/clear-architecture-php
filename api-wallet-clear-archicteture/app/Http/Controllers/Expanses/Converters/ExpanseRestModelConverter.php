<?php 

namespace App\Http\Controllers\Expanses\Converters;

use Domain\Expanses\Entities\ExpanseEntity;
use stdClass;

class ExpanseRestModelConverter {

    public function mapToEntityCreate(stdClass $restmodel) : ExpanseEntity {
        return new ExpanseEntity(
            null,
            $restmodel->description,
            $restmodel->amount,
            $restmodel->type,
            $restmodel->frequency,
            $restmodel->date
        );
    }

    public function mapToEntityUpdate(stdClass $restmodel) : ExpanseEntity {
        return new ExpanseEntity(
            $restmodel->id,
            $restmodel->description,
            $restmodel->amount,
            $restmodel->type,
            $restmodel->frequency,
            $restmodel->date
        );
    }


}