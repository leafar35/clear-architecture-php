<?php

namespace Domain\Expanses\Services;

use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\UseCases\DeleteExpansesUseCase;

class DeleteExpansesService extends DeleteExpansesUseCase {

    private $provider;

    public function __construct(
        ExpansesDataProvider $provider
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