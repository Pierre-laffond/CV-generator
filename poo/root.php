<?php

require __DIR__ . '/vendor/autoload.php';
session_start();
// competenceController
//etudeController
//experienceController
/*
 * view -> root
 * root->controller
 * controller->factorie
 * factorie->model et database
 * factorie return to controller
 * controller return to root
 * root redirect to vews
 */
function connexion($req)
{

    $code=  UserController::getUserInfo($req);
    if($code==200)
    {
        header('Location:utilisateur_accueil.php');
    }
}


function addUser($req)
{

   $code=  UserController::addUser($req);

   if($code==200)
    {
        header('Location:formation.php');
    }
}

function addEtude($req)
{
    $code=  EtudeController::addEtude($req);
    if($code==200)
    {
        header('Location:experiences.php');
    }
}

function addExperience($req)
{
    $code=  ExperienceController::addExperience($req);
    if($code==200)
    {
        header('Location:competences.php');
    }
}

function addCompetence($req)
{
    $code=  CompetenceController::addCompetence($req);
    if($code==200)
    {
        header('Location:Accueil.php');
    }
}
 function updateEtude($req)
{
    $code= EtudeController::updateEtude($req);
    if($code==200)
    {    
        echo "<script> window.location='affiche.php' </script>";
    }
}
function updateExperience($req)
{
    $code= ExperienceController::updateExperience($req);
    if($code==200)
    {        
         echo "<script> window.location='affiche.php' </script>";
    }
}

function updateCompetence($req)
{
    $code= CompetenceController::updateCompetence($req);
    if($code==200)
    {        
        echo "<script> window.location='affiche.php' </script>";
    }
}