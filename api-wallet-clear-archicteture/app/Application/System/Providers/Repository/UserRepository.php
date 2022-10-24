<?php

namespace Application\System\Providers\Repository;

use Application\System\Models\UserModel;

class UserRepository extends UserModel {

    protected $table = 'users';    

    protected $fillable = ['name', 'email', 'password', 'create_at', 'update_at'];

}