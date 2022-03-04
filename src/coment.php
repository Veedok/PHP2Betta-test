<?php 
namespace Php2bettaTest;
class Coment implements myString {
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