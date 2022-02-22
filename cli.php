<?php

use Faker\Factory;
use Veedok\Php2bettaTest\Coment;
use Veedok\Php2bettaTest\Person;
use Veedok\Php2bettaTest\Post;

require_once 'vendor/autoload.php';

$faker = Factory::create();
switch ($argv[1]) {
    case 'user':
        require_once 'vendor/composer/autoload_psr4.php';              
        $user = new Person($faker->name(), $faker->firstName(), $faker->lastName());
        echo $user;
        break;
    case 'post':        
        $post = new Post($faker->numerify(), $faker->numerify(), $faker->sentence(), $faker->text(300));
        echo $post;
        break;
    case 'comment':
        $new = new Coment($faker->buildingNumber() , $faker->buildingNumber() , $faker->buildingNumber() , $faker->text(50));
        echo $new;
        break;
}