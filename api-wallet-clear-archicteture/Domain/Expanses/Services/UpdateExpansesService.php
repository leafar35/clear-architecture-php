<?php 

namespace Domain\Expanses\Services;

use Domain\Expanses\Entities\ExpanseEntity;
use Domain\Expanses\UseCases\UpdateExpansesUseCase;
use Domain\Expanses\DataProviders\ExpansesDataProvider;

class UpdateExpansesService extends UpdateExpansesUseCase {

    private $provider;

    public function __construct(
        ExpansesDataProvider $provider
    ){
        $this->provider = $provider;
    }

    public function execute(ExpanseEntity $entity): ExpanseEntity {
        try{
            $response = $this->provider->create($entity);
            return $response;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

  
}