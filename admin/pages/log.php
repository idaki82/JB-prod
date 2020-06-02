<script type="text/javascript" src="js/log.js"></script>
<div class="container login-container">

		<div class="col-xs-12 login-form-1">
			<h3>Connexion admin</h3>
			<form metho='post' id ='log'>
				<div class="form-group">
					<label for="mail">Email</label>
					<input id='mail' type="text" class="form-control" placeholder="" value="" />
					<div class="help-block" id="helpMail"></div>
				</div>
				<div class="form-group">
					<label for="mdp">Mot de passe</label>
					<input id='mdp' type="password" class="form-control" placeholder="" value="" />
					<div class="help-block" id="helpMdp"></div>
				</div>
				<div class="form-group">
					<input id='sbmitLog' type="submit" class="btnSubmit" value="Valider" />
				</div>
				<div id="PbCoBdd" class="border-warning"></div>
				<div id='etatco'></div>
			</form>
		</div>

</div>
