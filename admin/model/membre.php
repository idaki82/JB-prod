<?php

    class membre
    {
        public function coMb($PDO,$mail,$mdp){
            $result = -3;

            /*
            $result = 1 => succes
            $result = 0 => echec 
            $result = -1 => email incorrect
            $result = -2 => mdp incorrect 
            */

            /* rechercher le mail dans la bdd */
            $req = $PDO -> prepare('SELECT * FROM membre WHERE mail = ?');
            /* compter le nombre de fois que le mail est présent dans la bdd */
            $req->execute(array($mail));
            $mail_exist = $req->rowCount();

            if($mail_exist == 0){
                $result = -1;
            }else{
                $user_info = $req -> fetch();
                if($user_info['mdp'] != $mdp){
                    $result = -2;
                }else{
                    $_SESSION['id']= $user_info['id_mb'];
                    $_SESSION['prenom'] = $user_info['prenom'];
                    $_SESSION['statut'] = $user_info['statut'];
                    $result = 1;
                }
            }
            return $result;
        }

        public function getmembre($PDO,$id)
        {
            
            $sql = $PDO -> prepare('SELECT * FROM membre WHERE id_mb = $id');
            $resultIsOk = $sql->execute();
            $result = $sql-> fetchAll();
            return ($result);
        }
    }
?>