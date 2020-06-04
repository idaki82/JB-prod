<?php

class MenuController
	{

		public function runChoix () :void 
			{
				//var_dump($_GET); pour vérifier si le programme trouve bien quelque chose là je l'ai désactivé
				/*if (array_key_exists('page1', $_GET) == true) 
					{
						include "./vue/page1.phtml";
						return;
					}

				if (array_key_exists('page2', $_GET) == true)
					{

						$afficher = (new ExempleModel("teste message"))->getMessage();
						include "./vue/page2.phtml";
						return;
					}*/

				require "./view/templatePage/template00.html"; // page par défaut 

							
			}

	}

/*

	Il est possible également de faire avec un switch case à la place de tous mes "if".

*/