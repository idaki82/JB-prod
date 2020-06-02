<?php
     include_once('app/pdo.php');
     include_once('model/livredor.php');
     include_once('modal_sup.php');

	//ouverture d'une connexion à la bdd entreprise
    $PDO = coBdd();
	//recupére les messages
	$messages = new livredor();
    $messages = $messages -> getLivredor($PDO);
    
?>
<script type="text/javascript" src="js/supp.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<div class="modal"></div>
<H1 id="titre-tb">Tableau de bord</H1>
<div class="afficher"></div>
<section id="tabs" class="project-tab">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Livre d'or</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Photos</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Membres</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nom</th>
                                    <th>message</th>
                                    <th>Date</th>
                                    <th>Adresse IP</th>
                                    <th>client</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($messages as $message): ?>
                                    <tr>
                                            <td><?= $message['id_lv']?></td> 
                                            <td><?= $message['nom_createur']?></td>
                                            <td><?= $message['message_lv']?></td>
                                            <td><?= $message['date_lv']?></td>
                                            <td><?= $message['ip_lv']?></td>
                                            <td><?= $message['id_mb']?></td> 
                                            <td>
                                                <button href="#confSupp" id="supLv" class="btn btn-danger sup" value="<?= $message['id_lv']?>" data-toggle="modal">
                                                <i class="fa fa-trash-o"></i></button>
                                            </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>

                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id mb</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Cp</th>
                                    <th>Ville</th>
                                    <th>Date insc</th>                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody> 
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   