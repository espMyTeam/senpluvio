<?php
$user="root";
$password="passer";

try{
	$bdd = new PDO('mysql:host=localhost;dbname=pluvio',$user,$password);
	
  }
catch(PDOException $e)
  {
	print "Erreur : ".$e->getMessage() ."<br/>";
	die();
 }  	
?>
