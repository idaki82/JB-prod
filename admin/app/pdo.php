<?php
 require_once './config/db-config.php';

function coBdd($DB_DSN, $DB_USER, $DB_PASS,$options)
{
    try
    {
        $PDO = new PDO($DB_DSN, $DB_USER, $DB_PASS, $options);
       // echo 'Connexion établie !';
        return $PDO;
    }
    catch (PDOException $pe)
    {
    echo 'ERREUR : ' .$pe ->getMessage();
    }
}

?>