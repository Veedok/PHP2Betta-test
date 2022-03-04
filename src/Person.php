<?php

namespace App;

class Person implements MakeFactoryInterface
{

    public function __construct(
        private string $id,
        private string $name, 
        private string $surname
        )
    {
    }

    public function __toString()
    {
        return 'Этого пользователя зовут: ' . $this->name . '. Его фамилия: ' . $this->surname . '. ID = ' . $this->id;
    }
}
