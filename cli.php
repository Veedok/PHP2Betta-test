<?php

use App\MakeFactory;

require_once 'vendor/autoload.php';
$factory = new MakeFactory;

// switch ($argv[1]) {
//     case 'user':              
//         $user = new Person($faker->name(), $faker->firstName(), $faker->lastName());
//         echo $user;
//         break;
//     case 'post':        
//         $post = new Post($faker->numerify(), $faker->numerify(), $faker->sentence(), $faker->text(300));
//         echo $post;
//         break;
//     case 'comment':
//         $new = new Coment($faker->buildingNumber() , $faker->buildingNumber() , $faker->buildingNumber() , $faker->text(50));
//         echo $new;
//         break;
// }
echo match ($argv[1]) {
    'user' => $factory->makeUser()->__toString(),
    'post' => $factory->makePost()->__toString(),
    'comment' => $factory->makeComent()->__toString(),
};
