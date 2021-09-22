<?php
class User{


	public function __construct($data)
    {

        foreach($data as $key=>$value){
          //(property_exists(get_class($this), $key))
            $this->$key = $value;
        }
        if(!array_key_exists('completed', $data)){
        $this->completed=0;
        }
    }

}

?>