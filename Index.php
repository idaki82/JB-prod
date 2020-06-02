<?php

declare(strict_types=1); 


require_once 'controller/menuController.php';

//require_once 'model/mainBasique.php';

// là on crée un nouveau controller puis on l'active 
$controller = new MenuController();

try 
	{
		$controller->runChoix(); //ici j'appelle la fonction choix de mon nouveau controller
	}

catch (Exception $e) 
	{
		die($e->getMessage()); //arrêt du programme en cas d'echec du lancement du controller et message d'erreur
	}

finally 
	{
		exit(); //cloture de l'index
	}

?>