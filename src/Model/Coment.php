<?php 
namespace App\Model;

use App\Factory\MakeFactoryInterface;

class Coment implements MakeFactoryInterface{
    public function __construct(
        private int $id,
        private int $idAuthor,
        private int $idPost,
        private string $text
    )
    {
        
    }
    public function __toString()
    {
        return "INSERT INTO `php2bettatest`.`coment` (`idAuthor`, `idPost`, `text`) VALUES ('3', '2', '". $this->text ."');";

    }
}