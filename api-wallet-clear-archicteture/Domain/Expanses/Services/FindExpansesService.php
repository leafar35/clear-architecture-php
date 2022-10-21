<?php

namespace Domain\Expanses\Services;

use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\UseCases\FindExpansesUseCase;

class FindExpansesService extends FindExpansesUseCase {

    private $provider;

    public function __construct(
        ExpansesDataProvider $provider
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