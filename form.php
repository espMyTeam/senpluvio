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
				<a><Strong>Espace Client</Strong></a>
			</li>
		</ul>
	</div>	
</div>

<div class="row">
	   <div class="box col-md-8 col-md-offset">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Authentification </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><id
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form role="form" action="authentification.php" method="POST">
					<div id="erreur"></div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Login</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"  name="login"  class="form-control"  required /> 
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password" class="form-control" required />
                    </div>
                    <button type="submit" class="label-success label label-default">VALIDER</button>
                    <a href="inscription.php" class="label-success label label-default">Cr&eacute;er Un Nouveau Compte</a>
                    <a href="lister.php" class="label-default label label-danger"> Mots de passe oublier!!</a>
                </form>
            </div>
        </div>
      </div>  
    <!--/span-->
</div><!--/row-->

<?php 
require('footer.php'); 
?>

