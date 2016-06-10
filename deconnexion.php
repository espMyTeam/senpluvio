<?php 
#================ destruction de la session ==============================# 

session_start();
$_SESSION = array();
session_destroy();
unset($_SESSION);
header('location:accueil_client.php');

?>
