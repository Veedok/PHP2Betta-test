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
        return $this->idAuthor . 'Пишет: ' . $this->text . ' К посту: ' . $this->idPost;
    }
}