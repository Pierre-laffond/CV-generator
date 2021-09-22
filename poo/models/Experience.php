<?php

class Experience
{

    public function __construct($data)
    {

        foreach($data as $key=>$value){
            //(property_exists(get_class($this), $key))
            $this->$key = $value;
        }

    }

}