<?php

require("connexion.php");
session_start();
#==================recuperation des nouvelle valeur saisies==================#

$code=$_SESSION['code'];

$zone=$_POST["zone"];
$latitude=$_POST["latitude"];
$longitude=$_POST["longitude"];
$description=$_POST["description"];


#================================Mise a jour de la base ========================#

$req=$bdd->prepare("UPDATE pluviometre SET zone = :zone, description= :description,latitude= :latitude ,longitude = :longitude where idPluvio= :code");
$req->execute(array(
					"zone" =>$zone,
					"description"=>$description,
					"latitude" =>$latitude,
					"longitude" =>$longitude,
					"code" => $code,
						 
			));
#=====================si tout se passe bien on redirige l'utilisateur vers une nouvelle page=================#

if($req){
	header('location:lister.php');
}
#=================fermeture de la requete================================#

$req->closeCursor();

?>
