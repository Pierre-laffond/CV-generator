<?php

class CompetenceFactorie
{


    // je creer la fonction qui recherche les info de la db
    public static function getUserCompetence($idUser){

        // Arezki c'est la ou tu te trompe par ce que on dois faire une joinnture
        // creation d'une instane db
        $db = new Database();
        // recupereation de lien de la connexion
        $link = $db->getLink();
// preparation de la requete
        //ici il faut faire jointure avec la table userCompetence
        $sql = "select * from competence where idCompetence in (select idCompetence from userCompetence where 
                  idUser= ?)";
        $stmt= $link->prepare($sql);
        $res = $stmt->execute(array($idUser));
        if($res) {
            if($stmt->rowCount()>0){
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $competence = $stmt->fetchAll();
                return $competence;
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
        $sql = "INSERT INTO competence    VALUES ($bindValues)";
        $stmt= $link->prepare($sql);
        $stmt->execute(array_merge([null],array_values($dataArray)));
        // on test si c'est bon avant
        // recuperer le lien de user ajouté
        $idCompetence=$link->lastInsertId();
        // returner le 'id  de user
        return $idCompetence;


    }
    public static function addUserCompetence($tabInfo){
   
        $db = new Database();
        $link = $db->getLink();


        $sql = "INSERT INTO usercompetence    VALUES (?,?,?)";
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
       $req = "update competence set  ";       
       foreach($dataArray as $key=>$value)
        {
            if($key!='idCompetence') 
            {
                $value = $link->quote($value); 
                $req .= " $key = $value , ";
            }
       }
       $req=  substr($req, 0, -2);
       $req.=" where idCompetence=".$dataArray['idCompetence'];
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