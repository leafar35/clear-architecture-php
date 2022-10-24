<?php

namespace Tests\Unit;

use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\GetUserUseCase;
use Exception;
use PHPUnit\Framework\TestCase;

class GetUserUseCaseTest extends TestCase
{

    public function testInstanceOfArray(){
        $entity = [new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','')];
        $service = $this->createMock(GetUserUseCase::class);
        $service->method('execute')->will($this->returnValue($entity));
        $result = $service->execute(null);
        $this->assertTrue(count($result) > 0);
    }

    public function testInstanceOfEntity(){
        $entity = [new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','')];
        $service = $this->createMock(GetUserUseCase::class);
        $service->method('execute')->will($this->returnValue($entity));
        $result = $service->execute(1);
        $this->assertTrue(get_class($result[0]) == UserEntity::class);
    }

    public function testReturnArrayEmpty(){
        $entity = [new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','')];
        $service = $this->createMock(GetUserUseCase::class);
        $service->method('execute')->will($this->returnValue([]));
        $result = $service->execute(1);
        $this->assertTrue(count($result) == 0);
    }

    public function testException(){
        try{
            $classmock = $this->createStub(GetUserUseCase::class);
            $classmock->execute(null);
            $this->fail("Não foi possivel pegar os usuários");
        }catch(Exception $e){
            $this->assertSame('Não foi possivel pegar os usuários', $e->getMessage());
        }
    }

}