<?php

class ExperienceFactorie
{


    // je creer la fonction qui recherche les info de la db
    public static function getUserExperience($id){
        $db = new Database();
        $link = $db->getLink();
        $sql = "select * from experience where idUser=?";
        $stmt= $link->prepare($sql);
        $res = $stmt->execute(array($id));
        if($res) {
            if($stmt->rowCount()>0){
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $experience = $stmt->fetchAll();
                return $experience;
            }
            else{
                return 403;
            }
        }
        else{
           echo $link->errorInfo();
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

        $bindValues.=',?';
        $sql = "INSERT INTO experience    VALUES ($bindValues)";
        $stmt= $link->prepare($sql);

        $idUser=$_SESSION['idUser'];
        $stmt->execute(array_merge([null],array_values($dataArray),[$idUser]));
        
        // on test si c'est bon avant
        // recuperer le lien de user ajouté
        $idExperience=$link->lastInsertId();
        // returner le 'id  de user
        return $idExperience;


    }
    public static function  update($tableData){
        $db = new Database();
        $link = $db->getLink();
        $dataArray = get_object_vars($tableData);
       $req = "update experience set  ";       
       foreach($dataArray as $key=>$value)
        {
            if($key!='idExp') 
            {
                $value = $link->quote($value); 
                $req .= " $key = $value , ";
            }
       }
       $req=  substr($req, 0, -2);
       $req.=" where idExp=".$dataArray['idExp'];
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