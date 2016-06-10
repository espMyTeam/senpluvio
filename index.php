<?php require('header.php'); ?>
 
<div class="row">
	<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Accueil</a>
        </li>
    </ul>
</div>
<div class="row">    
    <div class="box col-md-8">
		  <div class="row">
			<div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2">
				<a data-toggle="tooltip"  class="well top-block" href="#">
					<div><marquee>BIENVENUE DANS NEW PLUVIOMETRIE </marquee></div>
				</a>
			</div>
		  </div>	
		  
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Position des pluviom&eacute;tres</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 ">
								<div id="canevas_map"></div>  <!-- Pour contenir la carte google map-->
								<!-- Ce bout de code php permet d'afficher la carte  -->
								<?php
								   require_once('connexion.php');
								   $requete  = $bdd->prepare("SELECT * FROM  pluviometre ");
								   $resultat = $requete->execute();
								   require('map.php');
								
								?>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 ">
							<p>
								Bienvenue dans l'application réaliser par les étudiant de l'ESP .
								Cette applivation vous permet de visualiser la pluie en temps réel<br />
								La carte &agrave; gauche identifie les diff&eacute;rents pluviom&eacute;tres<br />
								Pour plus d'information cliquer sur le marker .
								Les chercheurs on la posibilité de t&eacute;l&eacute;charger les données 
								enregistr&eacute;es &agrave; d'avoir un compte .
								
							
							</p>
						</div>
				     </div><!--fin row  -->					
                </div>

            </div>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>
