<?php

namespace App\Http\Controllers\Expanses;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Expanses\Converters\ExpanseRestModelConverter;
use App\Http\Controllers\Expanses\Restmodels\ExpanseRestModel;
use App\Http\Controllers\Expanses\Resources\ExpansesResource;
use App\Http\Controllers\Expanses\Restmodels\CreateExpanseRestModel;
use Domain\Expanses\UseCases\CreateExpansesUseCase;
use Domain\Expanses\UseCases\DeleteExpansesUseCase;
use Domain\Expanses\UseCases\FindExpansesUseCase;
use Domain\Expanses\UseCases\UpdateExpansesUseCase;
use Illuminate\Http\JsonResponse;

class ExpanseController extends Controller implements ExpansesResource {
 
    private FindExpansesUseCase $findusecase;
    private CreateExpansesUseCase $createusecase;
    private UpdateExpansesUseCase $updateusecase;
    private DeleteExpansesUseCase $deleteusecase;
    private ExpanseRestModelConverter $converter;

    public function __construct(
        FindExpansesUseCase $findusecase,
        CreateExpansesUseCase $createusecase,
        UpdateExpansesUseCase $updateusecase,
        DeleteExpansesUseCase $deleteusecase,
        ExpanseRestModelConverter $converter
    ) {
        $this->findusecase = $findusecase;
        $this->createusecase = $createusecase;
        $this->updateusecase = $updateusecase;
        $this->deleteusecase = $deleteusecase;
        $this->converter = $converter;
    }


    public function findAll(){
        try{
            $response = $this->findusecase->execute(null);
            return $response;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function findOne(int $id): ExpanseRestModel{
        try{
            $response = $this->findusecase->execute(1);
            return $response;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function create(CreateExpanseRestModel $restmodel): JsonResponse {
        try{
            $entity = $this->converter->mapToEntity((object)$restmodel->toArray());
            $data = $this->createusecase->execute($entity);
            return response()->json((array)$data, 200);
        }catch(\Exception $e){
            dd($e->getMessage());
            return $e->getMessage();
        }
    }

    public function update(ExpanseRestModel $restmodel): JsonResponse {
        try{
            $entity = $this->converter->mapToEntity((object)$restmodel->toArray());
            $data = $this->updateusecase->execute($entity);
            return response()->json((array)$data, 200);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function delete(int $id): bool{
        try{
            $data = $this->deleteusecase->execute($id);
            return $data;
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

}