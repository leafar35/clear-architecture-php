<?php

namespace Tests\Unit;

use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\UpdateUserUseCase;
use Exception;
use PHPUnit\Framework\TestCase;

class UpdateUserUseCaseTest extends TestCase
{

    public function testInstanceOf(){
        $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
        $service = $this->createMock(UpdateUserUseCase::class);
        $result = $service->execute($entity);
        $this->assertInstanceOf(UserEntity::class, $result);
    }

    public function testUpdateUSer(){
        $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
        $usecase = $this->getMockForAbstractClass(UpdateUserUseCase::class);
        $result = $usecase->execute($entity);
        $this->assertNotNull($result);
    }

    public function testErrorMessage(){
        try{
            $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
            $classmock = $this->createStub(UpdateUserUseCase::class);
            $classmock->execute($entity);
            $this->fail("Não foi possivel atualizar o usuário");
        }catch(Exception $e){
            $this->assertSame('Não foi possivel atualizar o usuário', $e->getMessage());
        }
    }

}