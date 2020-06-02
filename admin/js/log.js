$(document).ready(function(){

/* définition des actions lors du clic sur le bouton action */
    $('#log').submit(function(){

        let resultat = true;

        /* si le champ login est vide, alors afficher "ce champ est obligatoire" et "ce champ est vide" */
        if($('#mail').val() == "") {
            $('#mail').attr('placeholder', 'Champ vide').parent().addClass('border-warning');
            $('#helpMail').text('Ce champs est requis');
            resultat = false;
        }

        /* si le champ mot de passe est vide, alors afficher "ce champ est obligatoire" et "ce champ est vide" */
        if($('#mdp').val() == "") {
            $('#mdp').attr('placeholder', 'Champ vide').parent().addClass('border-warning');
            $('#helpMdp').text('Ce champs est requis');
            resultat = false;
        }

        if(resultat == true){     
            
            let mail = $('#mail').val();
            let mdp = $('#mdp').val();
            
            $.post(
                'app/app_login.php', 
                {
                    mail : mail,
                    mdp : mdp
                },

                function(data){
                    $('#etatco').html(data);

                     if(data == 1){
                        $('#etatco').html('<h4>Succès</h4>');
                        $(".login-container").hide();
                        document.location.reload(true);
                    } else if(data == -1){
                        $('#etatco').html("Le mail n'existe pas !");
                    } else if(data == -2){
                        $('#etatco').html("Le mot de passe est incorrecte !");
                    }
                }
            )
        }
    return false;
    });

/* définition des actions lors remplissage des champs */
    $('#log').keyup(function(){
        
        /* si le champ login est vide remplie ne rien afficher, sinon afficher alors afficher "ce champ est obligatoire" et "ce champ est vide" */
        if($('#mail').val() != ""){
            $('#mail').parent().removeClass('border-warning');
            $('#helpMail').text('');
        }else{
            $('#mail').attr('placeholder', 'Champ vide').parent().addClass('border-warning');
            $('#helpMail').text('Ce champs est requis');
        }

        /* si le champ mot de passe est vide remplie ne rien afficher, sinon afficher alors afficher "ce champ est obligatoire" et "ce champ est vide" */
        if($('#mdp').val() == ""){
            $('#mdp').attr('placeholder', 'Champ vide').parent().addClass('border-warning');
            $('#helpMdp').text('Ce champs est requis');
        }else{
            $('#mdp').parent().removeClass('border-warning');
            $('#helpMdp').text('');
        }
    });

    $('#log').submit(function(){

        
    });

});
