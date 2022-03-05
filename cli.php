<?php

use App\Database\Conection\MysqlConect;
use App\Factory\MakeFactory;

require_once 'vendor/autoload.php';


// $factory = new MakeFactory;
// echo match ($argv[1]) {
//     'user' => $factory->makeUser(),
//     'post' => $factory->makePost(),
//     'comment' => $factory->makeComent(),
// };



$db = new MysqlConect('localhost', 'root', '', 'vk1', 3309);
$db->add("INSERT INTO `vk1`.`users` (`id`, `name`, `birthday_at`) VALUES ('6', 'Анастасия', '1985-07-28');");
