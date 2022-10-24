<?php 

namespace Application\System\Providers\Converters;

use Application\System\Models\UserModel;
use Domain\System\Entities\UserEntity;
use Illuminate\Database\Eloquent\Collection;

class UserEntityConverter {

    public function mapToEntityArray(Collection $models) : array {
        $entity = array_map(function($model){
            return new UserEntity($model['id'], $model['name'], $model['email'], $model['password'], "", "");
        }, $models->toArray());
        return $entity;
    }

    public function mapToEntity(UserModel $model): UserEntity {
        return new UserEntity($model['id'], $model['name'], $model['email'], $model['password'], $model['created_at'], $model['updated_at']);
    }

}