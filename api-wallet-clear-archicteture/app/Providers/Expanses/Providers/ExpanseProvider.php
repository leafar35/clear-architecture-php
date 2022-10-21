<?php 

namespace App\Providers\Expanses\Providers;

use Domain\Expanses\DataProvider\ExpanseDataProvider;
use Domain\Expanses\Entities\ExpanseEntity;

class ExpanseProvider implements ExpanseDataProvider {

    public function find(int $id){
        return [
            new ExpanseEntity(1,'saldo', 2.40, 'frete', 'frequente', '17/08/2019')
        ];
    }
    
    public function create(ExpanseEntity $entity): ExpanseEntity{
        return new ExpanseEntity(1,'saldo', 2.40, 'frete', 'frequente', '17/08/2019');
    }

    public function Update(ExpanseEntity $entity): ExpanseEntity{
        return new ExpanseEntity(1,'saldo', 2.40, 'frete', 'frequente', '17/08/2019');
    }

    public function delete(int $id): bool{
        return true;
    }

  
}