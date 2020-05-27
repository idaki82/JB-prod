<?php

    class membre
    {
        public function getmembre($PDO)
        {
            
            $sql = $PDO -> prepare('SELECT * FROM membre');
            $resultIsOk = $sql->execute();
            $result = $sql-> fetchAll();
            return ($result);
           
          /* while($data = $result -> fetch(PDO::FETCH_OBJ))
           {
            echo $data->message_lv;
           }*/
        }
    }
?>