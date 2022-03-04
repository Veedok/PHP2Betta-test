<?php

namespace Php2bettaTest;

interface myString
{
    public function __toString(): string;
}

class makeFactory
{
    public function makeUser($id, $name, $surname): myString
    {
        return new Person($id, $name, $surname);
    }
    public function makeComent($id, $idAuthor, $idPost, $text): myString
    {
        return new Coment($id, $idAuthor, $idPost, $text);
    }
    public function makePost($id, $idAvthor, $title, $description): myString
    {
        return new Post($id, $idAvthor, $title, $description);
    }
}
