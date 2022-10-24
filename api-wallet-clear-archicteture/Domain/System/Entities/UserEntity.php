<?php

namespace Domain\System\Entities;

class UserEntity {

    public ?int $id;
    public string $name;
    public string $email;
    public string $password;
    public string $createAt;
    public string $updateAt;

    public function __construct(?int $id=null, string $name, string $email, string $password, ?string $createAt = null, ?string $updateAt = null) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
    }

}