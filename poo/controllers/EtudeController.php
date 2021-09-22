<?php

class EtudeController
{
// je dois creer une fonction qui cherche les etude d'un user
// plus tard vous allez rajouter les fonction d'ajout et de modification des etude


// ma fonction est static donc on a l'obligation d'instatncié l'objet pour y acceder
// si je n'utilise pas le mot clé static je serai obligé de creer un objet EtudeController
//je vous montre
public static function getUserEtude($idUser){
    // ma fonction appel l'EtudeFactorie pour recuperer les etude
    // on a dit qu'on gere la database avec la factorie
    $resultEtude= EtudeFactorie::getUserEtude($idUser);
    // 403 si resultat vide
    // si on a recuperer les etude dans un tableau il faut parcourir la table pour creer des objet etude
    if($resultEtude !=403){
        foreach($resultEtude as $key=>$val){
            // dans chaque val il y aura les infos d'une etude
            $tabEtude []= new Etude($val);
            // new Etude($val) va appelé le constructeur de la class Etude et va parcourir les element
            //dans $val pour creer l'objet Etude
        }
    }
    return $tabEtude;


}

    public static  function addEtude($req)
    {
        $data=array_slice($req, 0,sizeof($req)-1);
        $etude = new Etude($data);
        $idEtude= EtudeFactorie::add($etude);
        $idUser= $_SESSION['idUser'];
        self::addUserEtude($idUser,$idEtude);
        //   EtudeController::addUserEtude($idUser,$idEtude);
        // mettre le idUser dans la session
        //this c'est pour dire cet objet et self pour dire cette class
        //  $_SESSION['idUser']=$idUser;
        return 200;
    }

    public static function addUserEtude($idUser,$idEtude)
    {
        $tabInfo =Array($idUser,$idEtude);
        return EtudeFactorie::addUserEtude($tabInfo);
    }
    public static  function updateEtude($req)
    {
        $data=array_slice($req, 0,sizeof($req)-1);
        $etude = new Etude($data);    
        $code= EtudeFactorie::update($etude);    
        $idUser= $_SESSION['userInfo']->idUser;
        // mettre a jour la session    if($_SESSION['userEtude']){
        $_SESSION['userEtude']=self::getUserEtude($idUser);    
        //   EtudeController::addUserEtude($idUser,$idEtude);
        // mettre le idUser dans la session
        //this c'est pour dire cet objet et self pour dire cette class
        //  $_SESSION['idUser']=$idUser;
        return $code;
    }
    
}