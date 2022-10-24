<?php

namespace Domain\System\Services;

use Domain\System\DataProviders\UserDataProvider;
use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\UpdateUserUseCase;
use Error;
use Exception;

class UpdateUserService extends UpdateUserUseCase {

  private UserDataProvider $provider;

  public function __construct(UserDataProvider $provider)
  {
    $this->provider = $provider;
  }

  public function execute(UserEntity $entity) : UserEntity{
    try{
      $response = $this->provider->Update($entity);
      return $response;
    }catch(Exception $e){
      throw new Error("Não foi possivel atualizar o usuário");
    }
  }

}