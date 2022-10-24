<?php 

namespace Application\System\Converters;

use Domain\System\Entities\UserEntity;
use Illuminate\Support\Facades\Date;
use stdClass;

class UserRestModelConverter {

    public function mapToEntityCreate(stdClass $restmodel) : UserEntity {
        return new UserEntity(
            null,
            $restmodel->name,
            $restmodel->email,
            $restmodel->password,
            Date::now(),
            "",
        );
    }

    public function mapToEntityUpdate(stdClass $restmodel) : UserEntity {
        return new UserEntity(
            $restmodel->id,
            $restmodel->name,
            $restmodel->email,
            $restmodel->password,
            '',
            ''
        );
    }


}