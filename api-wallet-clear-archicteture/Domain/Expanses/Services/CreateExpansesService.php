<?php  

namespace Domain\Expanses\Services;

use Domain\Expanses\Entities\ExpanseEntity;
use Domain\Expanses\DataProvider\ExpanseDataProvider;
use DOmain\Expanses\UseCases\CreateExpansesUseCase;

class CreateExpansesService implements CreateExpansesUseCase {

    private $provider;

    public function __construct(
        ExpanseDataProvider $provider
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