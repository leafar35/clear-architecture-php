<?php

namespace Domain\System\Services;

use Domain\System\DataProviders\UserDataProvider;
use Domain\System\UseCases\GetUserUseCase;
use Error;
use Exception;

class GetUserService extends GetUserUseCase {

  private UserDataProvider $provider;

  public function __construct(UserDataProvider $provider)
  {
    $this->provider = $provider;
  }

  public function execute(?int $id) : array{
    try{
      $response = $this->provider->find($id);
      return $response;
    }catch(Exception $e){
      throw new Error("Não foi possivel pegar os usuários");
    }
  }


}