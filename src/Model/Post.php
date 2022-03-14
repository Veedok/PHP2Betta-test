<?php 

namespace App\Model;

use App\Factory\MakeFactoryInterface;

class Post implements MakeFactoryInterface {
    public function __construct(
        private int $id,
        private int $idAvthor,
        private string $title,
        private string $description
    )
    {}
    public function __toString()
    {
        return "INSERT INTO `php2bettatest`.`post` (`idAvthor`, `title`, `description`) VALUES ('5', '". $this->title ."', '". $this->description ."');";

    }
}