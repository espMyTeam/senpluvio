<?php 
require ("connexion.php");

$code=$_GET["code"];

$req=$bdd->prepare("DELETE  FROM pluviometre where idPluvio= :code");
$req->execute(array( "code" => $code ));
if($req){
	header('location:lister_pluvio.php');
	exit();
}
$req->closeCursor();
?>
