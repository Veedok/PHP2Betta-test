<?php

namespace App\Model;

use App\Factory\MakeFactoryInterface;

class Person implements MakeFactoryInterface
{

    public function __construct(
        public string $id,
        public string $name, 
        public string $surname,
        public string $email
        )
    {
    }

    public function __toString()
    {
        return "INSERT INTO `php2bettatest`.`users` (`name`, `surname`, `email`) VALUES ('". $this->name ."', '". $this->surname ."', '". $this->email ."');";
    }
   
}
