<?php 

namespace App\Http\Controllers\Expanses\Providers;

use Domain\Expanses\DataProviders\ExpansesDataProvider;
use Domain\Expanses\Entities\ExpanseEntity;

class ExpanseProvider extends ExpansesDataProvider {

    public function find(?int $id){
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