<?php

namespace App;

use Faker\Factory;
use App\MakeFactoryInterface;

class MakeFactory
{
    private $faker;
    public function __construct()
    {
        $this->faker = Factory::create();
    }
    public function makeUser(): MakeFactoryInterface
    {
        return new Person($this->faker->name(), $this->faker->firstName(), $this->faker->lastName());
    }
    public function makeComent(): MakeFactoryInterface
    {
        return new Coment($this->faker->buildingNumber() , $this->faker->buildingNumber() , $this->faker->buildingNumber() , $this->faker->text(50));
    }
    public function makePost(): MakeFactoryInterface
    {
        return new Post($this->faker->numerify(), $this->faker->numerify(), $this->faker->sentence(), $this->faker->text(300));
    }
}
