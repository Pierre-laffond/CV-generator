<?php

class ExperienceController
{
// je dois creer une fonction qui cherche les Experience d'un user
// plus tard vous allez rajouter les fonction d'ajout et de modification des Experience


// ma fonction est static donc on a l'obligation d'instatncié l'objet pour y acceder
// si je n'utilise pas le mot clé static je serai obligé de creer un objet ExperienceController
//je vous montre
public static function getUserExperience($idUser){
    // ma fonction appel l'ExperienceFactorie pour recuperer les Experience
    // on a dit qu'on gere la database avec la factorie
    $resultExperience= ExperienceFactorie::getUserExperience($idUser);
    // 403 si resultat vide
    // si on a recuperer les Experience dans un tableau il faut parcourir la table pour creer des objet Experience
 
    if($resultExperience !=403){
        foreach($resultExperience as $key=>$val){
            // dans chaque val il y aura les infos d'une Experience
            $tabExperience []= new Experience($val);
            // new Experience($val) va appelé le constructeur de la class Experience et va parcourir les element
            //dans $val pour creer l'objet Experience
        }
    }
    return $tabExperience;


}

    public static  function addExperience($req)
    {
        $data=array_slice($req, 0,sizeof($req)-1);
        $experience = new Experience($data);
        $idExperience= ExperienceFactorie::add($experience);
        return 200;
    }

    public static  function updateExperience($req)
    {
        $data=array_slice($req, 0,sizeof($req)-1);
        $experience = new Experience($data);    
       
       
      
        $code= ExperienceFactorie::update($experience);    
        $idUser= $_SESSION['userInfo']->idUser;
       
        $_SESSION['userExperience']=self::getUserExperience($idUser);    
       
        return $code;
    }

}