<?php

use coment\Coment;
use Person\Person;
use Post\Post;



require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();  
switch ($argv[1]) {
    case 'user':              
        $user = new Person($faker->name(), $faker->firstName(), $faker->lastName());
        echo $user;
        break;
    case 'post':        
        $post = new Post($faker->numerify(), $faker->numerify(), $faker->sentence(), $faker->text(300));
        echo $post;
        break;
    case 'comment':
        $new = new Coment($faker->buildingNumber() , $faker->buildingNumber() , $faker->buildingNumber() , $faker->paragraphs());
        echo $new;
        break;
}