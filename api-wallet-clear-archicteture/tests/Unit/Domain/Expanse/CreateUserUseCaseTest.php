<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Domain\System\Entities\UserEntity;
use Domain\System\UseCases\CreateUserUseCase;

class CreateUserUseCaseTest extends TestCase
{
    
    public function testCreateUSer(){
        $entity = new UserEntity(1,'rafael','rafael1@gmail.com.br','123','','');
        $usecase = $this->getMockForAbstractClass(CreateUserUseCase::class);
        $result = $usecase->execute($entity);
        $this->assertInstanceOf(get_class($result), UserEntity::class);
    }

}
