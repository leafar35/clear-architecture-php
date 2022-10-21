<?php 

namespace App\Http\Controllers\Expanses\Converters;

use Domain\Expanses\Entities\ExpanseEntity;
use stdClass;

class ExpanseRestModelConverter {

    public function mapToEntity(stdClass $restmodel) : ExpanseEntity {
        return new ExpanseEntity(
            null,
            $restmodel->description,
            $restmodel->amount,
            $restmodel->type,
            $restmodel->frequency,
            $restmodel->date
        );
    }


}