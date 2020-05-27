<?php
$DB_DSN = 'mysql:host=localhost;port=3308;dbname=ygkefqg165';
$DB_USER = 'root';
$DB_PASS = '';

    //option associatif pour pdo
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
?>