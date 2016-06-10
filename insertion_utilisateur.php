<?php
#============          On demarre la session                =============================#
  session_start();
#=====================on inclut le fichier de connection a la base======================#

 require_once("connexion.php");
 require_once("debug.php");

#================recuperer les informations de  l'utilisateur==================#

 $login     = $_POST["login"]; 
 $nom       = $_POST["nom"];
 $prenom    = $_POST["prenom"];
 $structure = $_POST["structure"];
 $profil    = $_POST["profil"];
 

 
 
 #=================== definir un tableau qui va contenir les erreurs ==================#
 
 $errors = array();

#================== Verifier que l'email entree n'existe pas deja =======================#

if(!empty($_POST["login"]))
{
 $req=$bdd->prepare("SELECT id FROM utilisateurs WHERE login= :login");
 $req->execute(array('login' => $login ));	
 
 if($req->fetch()){
	 $errors['login']="ce login existe deja ";
	 
	 }

}  
 
 #======================= verifier la vadilider du mot de passer ======================
 
 if(empty($_POST["password"]) || $_POST["password"]!= $_POST["password_confirme"] )
      {
		$errors['password'] = " les password ne concorde pas ";
		
	  }
 else
	 {
	   $pass = sha1($_POST["password"]);
	 }

#================= s'il n'y a aucune erreur,on insere les donnees dans la table utilisateurs =======

if(empty($errors))
 {
 	
	 
 $req=$bdd->prepare("INSERT INTO utilisateurs(nom,prenom,structure,profil,login,password,date_inscription) values(:nom, :prenom, :structure, :profil, :login, :pass, CURDATE())" );
 $req->execute(array(
			'nom'       => $nom,
			'prenom'    =>$prenom,
			'structure' =>$structure,
			'profil'    =>$profil,
			'login'     =>$login,
			'pass'      =>$pass
                     ));	
 
		  	
	  if($test)
		     echo "ture";
	  else
		   echo "false"; 

 }
 else
   echo "une erreur dans errors";
	


  
?>
