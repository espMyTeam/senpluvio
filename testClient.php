<?php
	include("connexion.php");
	include("classes.php");
	$pluvio = new Pluvio($base);
	if(isset($_GET['donnees']) and !empty($_GET['donnees'])){
		$pluvio->enregistrement($_GET['donnees'], $_GET['nom'], $_GET['date']);
		echo "merci pour les donnees ";
	}else{
		echo "Rien ici";
	}
?>
