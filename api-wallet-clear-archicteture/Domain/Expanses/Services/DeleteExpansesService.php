<?php

namespace Domain\Expanses\Services;

use Domain\Expanses\DataProvider\ExpanseDataProvider;
use DOmain\Expanses\UseCases\DeleteExpansesUseCase;

class DeleteExpansesService implements DeleteExpansesUseCase {

    private $provider;

    public function __construct(
        ExpanseDataProvider $provider
    ){
        $this->provider = $provider;
    }

    public function execute(int $id): bool {
        try{
            $response = $this->provider->delete($id);
            return $response;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

  
}