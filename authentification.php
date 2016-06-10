<?php
#============On demarre la session=============================#
  session_start();
#=====================on inclut le fichier de connection a la base======================#

 require_once("connexion.php");
 

#================recuperer le login et le mot de passer de l'utilisateur==================#

 $login  = $_POST["login"]; 
 $pass    =$_POST["password"];


 
     $req=$bdd->prepare("SELECT * FROM admin WHERE login= :login AND password= :pass");
     $req->execute(array(
                          "login" => $login,
                          "pass"  => $pass 
          ));

     
        
      if($resultat=$req->fetch())
              {	  		
    
 #================= On redirige vers le formulaire d'authentification  ================#
              
                  $_SESSION['login'] = $login;
                  $_SESSION['pass']  = $pass;
                  $_SESSION['nom']   =$resultat['nom']; 
                  $_SESSION['test']  = 1;

                  header('Location: accueil_admin.php');
              } 
        
       else
              {   
  #=============== On redirige vers le fichier admin.php ============================#
               
               
               $_SESSION['test']=0;
               header('Location:form.php');
             }
  
?>
