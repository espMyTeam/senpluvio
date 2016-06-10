<?php
require_once "connexion.php";

$zone  = $_POST['zone'];
$lat   = $_POST['latitude'];
$long  =$_POST['longitude'];
$desc  =$_POST['description'];

if(!empty($_POST['zone']) && !empty($_POST['latitude']) && !empty($_POST['longitude']) && !empty($_POST['description']))
{
  $requete = $bdd->prepare("insert into pluviometre(zone,description,latitude,longitude) values(:zone,:desc,:latitude,:longitude)" );
  $resultat=$requete->execute(array(
					'zone'      => $zone,
					'desc'      => $desc ,
					'latitude'  => $lat,
					'longitude' => $long ));
  
  if($resultat)
     {
	   echo '<script>alert("Insertion Reussit");</script>';	
	   header('location:ajout.php');  
	   exit();
	  }
  	
}

?>
