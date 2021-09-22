<?php

class UserController
{
    public static  function addUser($req){
        $data=array_slice($req, 0,sizeof($req)-1);
        $user = new User($data);
// recupere l'id de user ajouter
        $idUser= UserFactorie::add($user);
        // mettre le idUser dans la session
        $_SESSION['idUser']=$idUser;
        return 200;

    }
    public static function getUserInfo($req){
         // appel la factorie pour chercher un utilisateur
        $resultUser = UserFactorie::getUserInfo($req);
        if($resultUser==403){
            return 403;
        }
        else{
            // creer l'objet user avec les info user
            $user = new User($resultUser);
            // remplire la session
            $_SESSION['userInfo']=$user;

            //appel le Experience controller pour recuperer les info experience
            $experience = ExperienceController::getUserExperience($user->idUser);
            // remplire la session
          
           $_SESSION['userExperience']=$experience;
            //appel le etudeCOntroller pour recuperer les etude
            // user controller n'a pas le droit de chercher directement les etude
            //il doit appeler le controller qui s'occupe des etude qui s'appel etudController
            //pour quil cherche les etude de l'utilisateur et lui renvoi la reponse
            // si la method n'etait pas static je dois creer un obket etudecontroller
            //$ec= new EtudeController();
            // $ec->getUserEtude();
            // on doit creer une class Etude, un controller EtudeController et un fatorie
            //EtudeFactorie

            $etudes = EtudeController::getUserEtude($user->idUser);
            /*
             *
             * Il faut re-dump le autoloader pour qu'il prend
               en compte les nouvelle class rajouté apres chaque rajout de class
                avec la commande
                composer dump-autoload dans la racine de projet
             */
            $_SESSION['userEtude']=$etudes;
            $competence = CompetenceController::getUserCompetence($user->idUser);
            
            $_SESSION['userCompetence']=$competence;
            return 200;

            //appel les competenceCOntroller pour recuperer les competence
            // remplire la session
            // return vers la root qui doit m'orienter vers le profil ou le cv
        }





        // return to the route


    }

}