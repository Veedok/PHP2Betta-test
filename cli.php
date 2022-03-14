<?php

use App\Database\Conection\MysqlConect;
use App\Factory\MakeFactory;

require_once 'vendor/autoload.php';


$factory = new MakeFactory;
echo match ($argv[1]) {
    'user' => $entite = $factory->makeUser(),
    'post' => $entite = $factory->makePost(),
    'comment' => $entite = $factory->makeComent(),
};



$db = new MysqlConect;
$db->add($entite);
