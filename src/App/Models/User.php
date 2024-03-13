<?php

namespace App\Models;
class User extends AbstractTable 
{

    protected ?string $email = null;
    protected ?string $password = null;
    private ?string $roles = null;
    private ?string $registered_at = null;

    public function setEmail($email){
        $this->email=$email;
    }

    public function setPassword($password){
        $this->password=$password;
    }

    public function setRoles($roles){
        $this->roles=$roles;
    }

    public function setRegisteredAt($registered_at){
        $this->registered_at=$registered_at;
    }

    public function toArray(){
        $userArray = [
            $this->email,
            $this->password,
            $this->roles,
            $this->registered_at
        ];
        return $userArray;
    }
}