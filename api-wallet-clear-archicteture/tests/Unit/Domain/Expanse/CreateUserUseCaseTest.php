<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\CreateUserUseCase;
use Exception;

class CreateUserUseCaseTest extends TestCase
{

    public function testInstanceOf(){
        $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
        $service = $this->createMock(CreateUserUseCase::class);
        $result = $service->execute($entity);
        $this->assertInstanceOf(UserEntity::class, $result);
    }

    public function testCreateUSer(){
        $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
        $usecase = $this->getMockForAbstractClass(CreateUserUseCase::class);
        $result = $usecase->execute($entity);
        $this->assertNotNull($result);
    }

    public function testErrorMessage(){
        try{
            $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
            $classmock = $this->createStub(CreateUserUseCase::class);
            $classmock->execute($entity);
            $this->fail("Não foi possivel criar o usuário");
        }catch(Exception $e){
            $this->assertSame('Não foi possivel criar o usuário', $e->getMessage());
        }
    }

}
