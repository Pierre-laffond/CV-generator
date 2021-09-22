<?php
require_once('../root.php');
$user = $_SESSION['userInfo'];
$experiences = $_SESSION['userExperience'];
$competences = $_SESSION['userCompetence'];
$etudes = $_SESSION['userEtude'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon CV </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <style>
    body {
  background: #dd5e89;
  background: -webkit-linear-gradient(to left, #dd5e89, #f7bb97);
  background: linear-gradient(to left, #dd5e89, #f7bb97);
  min-height: 100vh;
    }
    .gestion{
            display:none;
        }
        .skills:hover>.gestion{
            display:block;
        }
</style>
</head>
<body>
    <div id= head>
        <?php
        echo "<p> Nom : $user->nomUser </p>";
        echo "<p>Prenom :   $user->prenomUser </p>";
        echo "<p>Email :   $user->emailUser </p>";
        echo "<p>Telephone :   $user->telUser </p>";
        echo "<p> Adresse : $user->numRueUser $user->nomRueUser $user->villeUser $user->cpUser $user->paysUser</p>";   
        ?>

<div id="content">
    <h2>EXPERIENCE</h2>
        <?php if(isset($_POST['updateExperience']))
            {
                updateExperience($_REQUEST);
            }
                foreach($experiences as $key=>$value)
                { 
                        echo "<h3>$value->descriptionExperience</h3>";
                        echo "<p>$value->debutExperience<br>";   
                        echo "<p>$value->finExperience<br>"; 
                        echo "<em>$value->entrepriseExperience </em></p>"; 
        ?>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#modalExperience'.$value->idExp;?>">
            Modifier mes expériences
        </button>
           
<!-- modal EXPERIENCE -->

 <div class="modal fade" id="<?php echo 'modalExperience'.$value->idExp;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier une expérience</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                    
                    
                    <form action="" method="post" >
                    <div class="modal-body">
                        <input type="hidden" name="idExp" value="<?php echo $value->idExp;?>"/>                       
                        <label>Commencer le  :</label></label> <input type="date" value="<?php  echo $value->debutExperience;   ?>" name="debutExperience" /><br><br>
                        <label>Fini le :</label></label> <input type="date" value="<?php  echo $value->finExperience;   ?>" name="finExperience" /><br><br>
                        <label>Nom Entreprise :</label> <input type="text" value="<?php  echo $value->entrepriseExperience;   ?>" name="entrepriseExperience" /><br><br>
                        <label>Description du poste :</label> <input type="text" value="<?php  echo $value->descriptionExperience;   ?>" name="descriptionExperience" />
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" name="updateExperience" class="btn btn-primary">Sauvegarder mon Expérience.</button>
                    </div>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>

                <?php 
                    }
                ?>
   
    

   <!-- fin modal EXPERIENCE -->   

    <br><br><br>
    

    <div class="content">
    <h2>EDUCATION</h2>
    <?php if(isset($_POST['updateEtude'])){
            updateEtude($_REQUEST);}
           foreach($etudes as $key=>$value)
           { 
                
                echo "<p> $value->diplomeEtude<br>";  
                echo "<p>$value->anneeEtude</p>"; 
                echo "<em>$value->ecoleEtude </em></p>"; 
          
           ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#modalEtude'.$value->idEtude;?>">
                Modifier mes études
            </button>
        <!-- modal ETUDE -->       

        <div class="modal fade" id="<?php echo 'modalEtude'.$value->idEtude;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modifier une étude.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post" >
                    <div class="modal-body">
                        <input type="hidden" name="idEtude" value="<?php echo $value->idEtude;?>"/>
                        <label>Année d'obtention :</label></label> <input type="text" value="<?php  echo $value->anneeEtude;   ?>" name="anneeEtude" /><br><br>
                        <label>Nom du Diplome :</label> <input type="text" value="<?php  echo $value->diplomeEtude;   ?>" name="diplomeEtude" /><br><br>
                        <label>Nom de l'Ecole :</label> <input type="text" value="<?php  echo $value->ecoleEtude;   ?>" name="ecoleEtude" />
                    </div>
                    <div class="modal-footer">                        
                        <button type="submit" name="updateEtude" class="btn btn-primary">Sauvegarder mon étude.</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>        
    <!-- fin modal ETUDE -->    
    </div></div>
    <?php
        }
    ?>

   

    <div id="content">
    
    <?php if(isset($_POST['updateCompetence'])){
            updateCompetence($_REQUEST);
            
        }
           
        ?>

   
    <br><br><br>

    <div class="entry">
    <h2><b> COMPETENCE</h2>
    <div class="content">       
    
    
    <ul class="skills">
            <form action="" method="post" id="addCompetence" >
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#modalCompetence'.$value->idCompetence;?>">
               add competence
            </button>
           <br>
            <?php
                foreach ($competences as $key=>$value){              
                echo "<li> $value->libCompetence </li>";          
            ?>               
             <!-- modal COMPETENCE -->
                <br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="<?php echo '#modalCompetence'.$value->idCompetence;?>">
                Gerer
                </button>
                
                <div class="modal fade" id="<?php echo 'modalCompetence'.$value->idCompetence;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                             <!-- --------------------POP-UP---------------------- -->
                                <h5 class="modal-title" id="exampleModalLabel">Modification de la compétence.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                     
                            <form action="" method="post" >
                                <div class="modal-body">
                                    <input type="hidden" name="idCompetence" value="<?php echo $value->idCompetence;?>"/>
                                    <label>Compétence :</label></label> <input type="text" value="<?php  echo $value->libCompetence ; ?>" name="libCompetence"/>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="updateCompetence" class="btn btn-primary">Save changes</button>
                                    <button type="submit" name="deleteCompetence" class="btn btn-primary">delete competence</button>
                                </div>
                            <!-- --------------------POP-UP---------------------- -->
                            </form>
                        </div>
                    </div>
                </div>  
                
            <?php    

            }
            ?>
    </ul>
    </div>

    <br><br><br><br>




</body>


</html>