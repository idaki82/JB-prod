<?php
if(!isset($_SESSION)){
    session_start();
}
include_once('pdo.php');
include_once('../model/membre.php');

//ouverture d'une connexion à la bdd entreprise
$PDO = coBdd();

if(isset($_POST['mail']) && isset($_POST['mdp'])){

    /* protection contre l'injection Sql vial le mail */
    $mail = htmlspecialchars($_POST['mail']);

    /* hachurage du mot de passe */
    //$mdp = sha1($_POST['mdp']);
    $mdp =$_POST['mdp'];
   
    $verif = new membre();
    $verif = $verif -> coMb($PDO,$mail,$mdp);
    echo $verif;

}


?>