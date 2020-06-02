<?php

 $DB_DSN = 'mysql:host=localhost;port=3308;dbname=ygkefqg165';
 $DB_USER = 'root';
 $DB_PASS = '';
 $options=
 [
     //verification que c'est bien en utf8
     PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
     //passer les erreur en exception
     PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
     /*
     //connexion PDO devien persistant
     PDO::ATTR_PERSISTENT => true
     */
 ];
function coBdd()
{
    global $DB_DSN;
    global $options;
    global $DB_USER;
    global $DB_PASS;

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