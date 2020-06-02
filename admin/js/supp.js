$(document).ready(function(){

  let id;
  let table;

  $(".sup").click(function(){

      table = 'livre_dor';
      id = $(this).val();
      $('.delete').attr('id', id);
      $('.delete').attr('value', table);
  });

  $(".delete").click(function(){
    
    table = $(this).val();
    id = $(this).attr('id');

    $.post(
      'app/app_sup.php', 
      {
          id : id,
          table : table
      },

      function(data){
            if(data == 1){
              alert("le message du livre d'or a bien était supprimé");
              document.location.reload(true);
          } else  if(data == 0){
             alert("échec");
          } else {
            alert(data);
          }
      }
    )
    return false;
  });
})