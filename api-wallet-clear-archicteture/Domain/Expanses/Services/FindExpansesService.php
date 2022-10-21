<?php

namespace Domain\Expanses\Services;

use Domain\Expanses\DataProvider\ExpanseDataProvider;
use DOmain\Expanses\UseCases\FindExpansesUseCase;

class FindExpansesService implements FindExpansesUseCase {

    private $provider;

    public function __construct(
        ExpanseDataProvider $provider
    ){
        $this->provider = $provider;
    }

    public function execute(?int $id) {
        try{
            $response = $this->provider->find($id);
            return $response;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

  
}