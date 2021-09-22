<?php

class Database
{
    private  $host="localhost";
    private  $user="root";
    private  $pwd="";
    private  $db="cvgene";
    public $link;


public function __construct()
{
    $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
    $this->link = new PDO($dsn,$this->user,$this->pwd);

}

    /**
     * @return string
     */
    public function getDb()
    {
        return $this->db;
    }
public function getLink(){
    return $this->link;

}


}