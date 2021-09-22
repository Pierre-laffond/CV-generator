<?php

class EtudeFactorie
{


    // je creer la fonction qui recherche les info de la db
    public static function getUserEtude($idUser){

        // Arezki c'est la ou tu te trompe par ce que on dois faire une joinnture
        // creation d'une instane db
        $db = new Database();
        // recupereation de lien de la connexion
        $link = $db->getLink();
// preparation de la requete
        //ici il faut faire jointure avec la table userEtude
        $sql = "select * from etude where idEtude in (select idEtude from userEtude where 
                  idUser= ?)";
        $stmt= $link->prepare($sql);
        $res = $stmt->execute(array($idUser));
        if($res) {
            if($stmt->rowCount()>0){
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $etude = $stmt->fetchAll();
                return $etude;
            }
            else{
                return 403;
            }

        }
        else{
            $link->errorInfo();
        }

    }

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
        $sql = "INSERT INTO etude    VALUES ($bindValues)";
        $stmt= $link->prepare($sql);
        $stmt->execute(array_merge([null],array_values($dataArray)));
        // on test si c'est bon avant
        // recuperer le lien de user ajouté
        $idEtude=$link->lastInsertId();
        // returner le 'id  de user
        return $idEtude;


    }
    public static function addUserEtude($tabInfo){
var_dump($tabInfo);
        $db = new Database();
        $link = $db->getLink();


        $sql = "INSERT INTO useretude    VALUES (?,?,?)";
        $stmt= $link->prepare($sql);
        $stmt->execute(array_merge([null],$tabInfo));
        // on test si c'est bon avant
        // recuperer le lien de user ajouté

        // returner le 'id  de user
        return 200;
    }
    public static function  update($tableData){
        $db = new Database();
        $link = $db->getLink();
        $dataArray = get_object_vars($tableData);
       $req = "update etude set  ";       foreach($dataArray as $key=>$value){
            if($key!='idEtude') {
                $value = $link->quote($value); 
                $req .= " $key = $value , ";
            }
       }
       $req=  substr($req, 0, -2);
       $req.=" where idEtude=".$dataArray['idEtude'];
    try{
       
      
        $stmt= $link->prepare($req);
        $stmt->execute();
      
  
return 200;
    }
    catch(exception $e)
    {    
        
        echo $link->errorInfo();
    }   
 }
}