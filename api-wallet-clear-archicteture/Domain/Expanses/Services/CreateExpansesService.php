<?php  

namespace Domain\Expanses\Services;

use Domain\Expanses\Entities\ExpanseEntity;
use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\UseCases\CreateExpansesUseCase;

class CreateExpansesService extends CreateExpansesUseCase {

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