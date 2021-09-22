<?php

class UserFactorie
{
    public static function  add($tableData){
    $db = new Database();
    $link = $db->getLink();
    $dataArray = get_object_vars($tableData);
    /*
     * "nom"=>bob"
     * "age"=>34
     */
        $bindValues='?';
         for($i=0;$i<sizeof($dataArray);$i++){
             $bindValues .=",?";
        }
// $bindValues='?,?,?,?,?,?';
        $sql = "INSERT INTO user    VALUES ($bindValues)";
        $stmt= $link->prepare($sql);
        $stmt->execute(array_merge([null],array_values($dataArray)));
        // on test si c'est bon avant
        // recuperer le lien de user ajouté
        $idUser=$link->lastInsertId();
        // returner le 'id  de user
        return $idUser;


}
    public static function getUserInfo($req){
    // creation d'instance DB
        $db = new Database();
        // recuperation de liens de connexion
        $link = $db->getLink();
        // preparation de la requette
        $sql = "select * from user where emailUser=? and passwordUser= ?";
        $stmt= $link->prepare($sql);
        // envoie des variable pour execution
        $res = $stmt->execute(array($req['mail'],$req['pwd']));
        // verification de bon deroulement de la requette
        if($res) {
           if($stmt->rowCount()>0){
               $stmt->setFetchMode(PDO::FETCH_ASSOC);
               $user = $stmt->fetch();
             return $user;
           }
           else{
               return 403;
           }

        }
        else{
            $link->errorInfo();
        }


    }
}