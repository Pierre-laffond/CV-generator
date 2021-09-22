<?php

class Competence
{
    public function __construct($data)
    {
        if(gettype($data)!='array'){
        $this->libCompetence=$data;
    }
    else{
        foreach($data as $key=>$value){
            //(property_exists(get_class($this), $key))
            $this->$key = $value;
        }
    }
    }

}