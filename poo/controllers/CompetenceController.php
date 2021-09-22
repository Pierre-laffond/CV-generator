<?php

class CompetenceController
{
// je dois creer une fonction qui cherche les Competence d'un user
// plus tard vous allez rajouter les fonction d'ajout et de modification des Competence


// ma fonction est static donc on a l'obligation d'instatncié l'objet pour y acceder
// si je n'utilise pas le mot clé static je serai obligé de creer un objet CompetenceController
//je vous montre
public static function getUserCompetence($idUser){
    // ma fonction appel l'CompetenceFactorie pour recuperer les Competence
    // on a dit qu'on gere la database avec la factorie
    $resultCompetence= CompetenceFactorie::getUserCompetence($idUser);
    // 403 si resultat vide
    // si on a recuperer les Competence dans un tableau il faut parcourir la table pour creer des objet Competence
    if($resultCompetence !=403){
        foreach($resultCompetence as $key=>$val){
            // dans chaque val il y aura les infos d'une Competence
            $tabCompetence []= new Competence($val);
            // new Competence($val) va appelé le constructeur de la class Competence et va parcourir les element
            //dans $val pour creer l'objet Competence
        }
    }
    return $tabCompetence;


}

    public static  function addCompetence($req){
        for($i=0;$i<sizeof($req['libCompetence']);$i++){
            $competence=$req['libCompetence'][$i];
            if($competence!=""){

            
            $competenceObjet = new Competence($competence);

            $idCompetence= CompetenceFactorie::add($competenceObjet);
            $idUser= $_SESSION['idUser'];
            self::addUserCompetence($idUser,$idCompetence);
            //   CompetenceController::addUserCompetence($idUser,$idCompetence);
            // mettre le idUser dans la session
            //this c'est pour dire cet objet et self pour dire cette class
            //  $_SESSION['idUser']=$idUser;
        }
    }
        return 200;
   
    }

    public static function addUserCompetence($idUser,$idCompetence)
    {

        $tabInfo =Array($idUser,$idCompetence);
        return CompetenceFactorie::addUserCompetence($tabInfo);
    }
    
    public static  function updateCompetence($req)

    {
        $data=array_slice($req, 0,sizeof($req)-1);
        $competences = new Competence($data);    
        $code= CompetenceFactorie::update($competences);    
        $idUser= $_SESSION['userInfo']->idUser;  
        $_SESSION['userCompetence']=self::getUserCompetence($idUser);       
        
        return $code;
    }
}