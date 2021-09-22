<?php

class Etude
{
    // dans le model etude on suit la meme methode de creation des objets directement
    // un constructeur qui prend un tableau associatif et qui  va creer un obket etude
    public function __construct($data)
    {

        foreach($data as $key=>$value){
            //(property_exists(get_class($this), $key))
            $this->$key = $value;
        }

    }

}