<?php 

namespace Application\Expanses\Providers;

use Application\Expanses\Providers\Repository\ExpansesRepository;
use Application\Expanses\Providers\Converters\ExpanseEntityConverter;
use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\Entities\ExpanseEntity;

class ExpanseProvider extends ExpansesDataProvider {

    private ExpansesRepository $repository;
    private ExpanseEntityConverter $converter;

    public function __construct(ExpansesRepository $repositoryParam, ExpanseEntityConverter $converter){
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
    
    public function create(ExpanseEntity $entity): ExpanseEntity{
        $entity = (array)$entity;
        $model = $this->repository->create($entity);
        $data = $this->converter->mapToEntity($model);
        return $data;
    }

    public function Update(ExpanseEntity $entity): ExpanseEntity {
        $model = $this->repository->find($entity->id);
        $model->description = $entity->description;
        $model->amount = $entity->amount;
        $model->type = $entity->type;
        $model->frequency = $entity->frequency;
        $model->date = $entity->date;
        $model->saveOrFail();
        return $entity;
    }

    public function delete(int $id): bool{
        $delete = $this->repository->find($id);
        return $delete->delete();
    }

  
}