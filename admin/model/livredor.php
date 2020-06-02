<?php


    class livredor
    {
        public function getLivredor($PDO)
        {
            $sql = $PDO -> prepare('SELECT * FROM livre_dor');
            $resultIsOk = $sql->execute();
            $result = $sql-> fetchAll();
            return ($result);
           
        }

        public function ajoutLivredor($PDO, $nomcrea, $message, $date, $ip, $idclient)
        {
            //vérification que les variables sont bien remplies
            var_dump($nomcrea);
            var_dump($message);
            var_dump($date);
            var_dump($ip);
            var_dump($idclient);

            //on lie chaque marqueur à une valeur
			$rqt->bindValue(':nomcrea', $nomcrea, PDO::PARAM_STR);
			$rqt->bindValue(':message', $message, PDO::PARAM_STR); 
			$rqt->bindValue('date', $date, PDO::PARAM_STR); 
			$rqt->bindValue(':ip', $ip, PDO::PARAM_STR); 
			$rqt->bindValue(':idclient', $idclient, PDO::PARAM_STR); 

            //préparation de la requète d'insertion (SQL)
            $sql = $PDO->prepare('INSERT INTO livre_dor VALUE (NULL,:nomcrea, :message, :date, :idclient)');

            //éxécution de la requête
            $insertIsOk = $sql->execute();
            
            //vérification que la requête est bien exécuté
			if($insertIsOk)
			{
				$message = 'le message à été ajouté dans la BDD';
				var_dump ($message);
			}else
			{
				$message = 'echec de l\'insertion';	
				var_dump ($message);
			}
			//vérification de la requête
			var_dump($sql); 
        }
        
        function suppLivredor($PDO,$idMsgLv)
		{
            $result = -1;

            /*
            $result = 1 => succes
            $result = 0 => echec 
            */
       
			//préparation de la requète d'insertion (SQL)
            $sql = $PDO->prepare('DELETE FROM `livre_dor` WHERE `livre_dor`.`id_lv` = ?');

            //éxécution de la requête
            $suppIsOk = $sql->execute(array($idMsgLv));

            if ($suppIsOk == true){
                $result = 1;
            }else if ($suppIsOk == false){
                $result = 0;
            } else {
                $result = $idMsgLv;
            }

            return $result;
		}
    }

?>