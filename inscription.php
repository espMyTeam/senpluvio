<?php 

require('header_client.php'); 
?>

<div>
	<div class="header  col-md-8">
		<ul class="breadcrumb">
			<li>
				<a href="accueil_client.php"><Strong>Accueil</Strong></a>
			</li>
			<li>
				<a href="#"><Strong>Inscription</Strong></a>
			</li>
		</ul>
	</div>	
</div>
<div class="row">
	   <div class="box col-md-6 col-md-offset-2">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Renseigner Vos Informations </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form form="role" action="insertion_utilisateur.php" method="POST">
                    <div class="form-group">
                        <label for="zone">Nom</label>
                        <input type="text" class="form-control"   name="nom" placeholder="nom" required>
                    </div>
                    <div class="form-group">
                        <label for="latitude">Prenom</label>
                        <input type="text" class="form-control" name="prenom" placeholder="prenom" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Structure</label>
                        <input type="text" class="form-control" i name="structure" placeholder="structure" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Profil</label>
                        <input type="text" class="form-control" i name="profil" placeholder="profil" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">login</label>
                        <input type="email" class="form-control" i name="login" placeholder="dic2@esp.sn" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" i name="password"  required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirmer mot de passe</label>
                        <input type="password" class="form-control" i name="password_confirme"  required>
                    </div>
                    <button type="submit" class="btn btn-default">Valider</button>
                </form>
            </div>
        </div>
      </div>  
    <!--/span-->
</div><!--/row-->

<?php 
require('footer.php');

?>
