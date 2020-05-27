<?php
require_once'./app/form.php';
	
    $form = new Form($_POST);
?>
<div>
<!-- <img src="../images/Jb-mini.png" height=10%/> -->
	<H2>Espace administration</H2>
	<form action="#" method="post">
		<?php
		echo $form -> inputtext('username','Login');
		echo $form -> inputtext('password','Mot de passe');
		echo $form -> submit();
		?>
	</form>
</div>