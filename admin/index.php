<?php
if(!isset($_SESSION)){
    session_start();
}

require_once './pages/head.php';


if (!isset($_SESSION['prenom'])){
    require_once'./pages/log.php';
}else if($_SESSION['statut'] == 9){
    require_once'./pages/tb.php';
}else{
    echo("<h1>vous n'avez pas la permission d'acceder a cette zone</h1>");
}


?>
