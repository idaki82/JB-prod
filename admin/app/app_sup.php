<?php
if(!isset($_SESSION)){
    session_start();
}

include_once('pdo.php');
include_once('../model/livredor.php');

//ouverture d'une connexion à la bdd entreprise
$PDO = coBdd();

if(isset($_POST['id']) && isset($_POST['table'])){

    $id = $_POST['id'];
    $table =$_POST['table'];
   
	switch ($table) {
		case "livre_dor":
			$supp = new livredor();
			$supp = $supp -> suppLivredor($PDO,$id);
			echo $supp;

			break;
		case "membre":
			$supp = new membre();
			$supp = $supp -> coMb($PDO,$mail,$mdp);
			echo $supp;
			
			break;
		case "photo":
			

			break;
		case "categorie":
		
		
		break;
	}

}
?>

