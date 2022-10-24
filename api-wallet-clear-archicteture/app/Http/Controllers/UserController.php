<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Application\System\Converters\UserRestModelConverter;
use Application\System\Restmodels\CreateUserRestModel;
use Application\System\Restmodels\UserRestModel;
use Application\System\Resources\UserResource;
use Domain\System\UseCases\CreateUserUseCase;
use Domain\System\UseCases\GetUserUseCase;
use Domain\System\UseCases\UpdateUserUseCase;
use Illuminate\Http\JsonResponse;

class UserController extends Controller implements UserResource {
 
    private GetUserUseCase $findusecase;
    private CreateUserUseCase $createusecase;
    private UpdateUserUseCase $updateusecase;
    private UserRestModelConverter $converter;

    public function __construct(
        GetUserUseCase $findusecase,
        CreateUserUseCase $createusecase,
        UpdateUserUseCase $updateusecase,
        UserRestModelConverter $converter
    ) {
        $this->findusecase = $findusecase;
        $this->createusecase = $createusecase;
        $this->updateusecase = $updateusecase;
        $this->converter = $converter;
    }

    public function findAll(){
        try{
            $response = $this->findusecase->execute(null);
            return response()->json((array)$response, 200);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function findOne(int $id): JsonResponse{
        try{
            $response = $this->findusecase->execute($id);
            return response()->json($response, 200);
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function create(CreateUserRestModel $restmodel): JsonResponse {
        try{
            $entity = $this->converter->mapToEntityCreate((object)$restmodel->toArray());
            $data = $this->createusecase->execute($entity);
            return response()->json((array)$data, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 200);
        }
    }

    public function update(UserRestModel $restmodel): JsonResponse {
        try{
            $entity = $this->converter->mapToEntityUpdate((object)$restmodel->toArray());
            $data = $this->updateusecase->execute($entity);
            return response()->json((array)$data, 200);
        }catch(\Exception $e){
            return response()->json($e->getMessage(), 200);
        }
    }

}