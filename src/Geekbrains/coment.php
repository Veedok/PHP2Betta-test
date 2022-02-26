<?php 
namespace coment;
class Coment {
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