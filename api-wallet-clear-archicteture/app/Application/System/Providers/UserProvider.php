<?php 

namespace Application\System\Providers;

use Application\System\Providers\Converters\UserEntityConverter;
use Application\System\Providers\Repository\UserRepository;
use Domain\System\DataProviders\UserDataProvider;
use Domain\System\Entities\UserEntity;

class UserProvider extends UserDataProvider {

    private UserRepository $repository;
    private UserEntityConverter $converter;

    public function __construct(UserRepository $repositoryParam, UserEntityConverter $converter){
        $this->repository = $repositoryParam;
        $this->converter = $converter;
    }

    public function find(?int $id){
        if(!$id){
            $all = $this->repository->all();
            $data = $this->converter->mapToEntityArray($all);
            return $data;
        }
        $entity = $this->repository->find($id);
        $data = $this->converter->mapToEntity($entity);
        return $data;
    }
    
    public function create(UserEntity $entity): UserEntity{
        $entity = (array)$entity;
        $model = $this->repository->create($entity);
        $data = $this->converter->mapToEntity($model);
        return $data;
    }

    public function Update(UserEntity $entity): UserEntity {
        $model = $this->repository->find($entity->id);
        $model->name = $entity->name;
        $model->email = $entity->email;
        $model->password = $entity->password;
        $model->saveOrFail();
        return $entity;
    }

    public function delete(int $id): bool{
        $delete = $this->repository->find($id);
        return $delete->delete();
    }

  
}