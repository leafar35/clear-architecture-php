<?php

namespace Domain\System\Services;

use Domain\System\DataProviders\UserDataProvider;
use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\CreateUserUseCase;
use Error;
use Exception;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class CreateUserService extends CreateUserUseCase {

  private UserDataProvider $provider;

  public function __construct(UserDataProvider $provider)
  {
    $this->provider = $provider;
  }

  public function execute(UserEntity $entity) : UserEntity{
    try{
      $entity->password = Hash::make($entity->password);
      $response = $this->provider->create($entity);
      return $response;
    }catch(Exception $e){
      throw new Error("Não foi possivel criar o usuário");
    }
  }

}