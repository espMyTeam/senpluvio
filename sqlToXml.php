<html>
<head>
     <meta charset="utf-8">
     <title>PLuviometrie</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description">
     <meta name="author" content="DIC2-TR">
</head>
<body>
	
<div id="header">
	<section id="content">
	<?php
	 require_once "connexion.php";
	 
	  $sql ="SELECT * FROM  pluviometre";
	  $req = $bdd->query($sql);
	  
      $filename = "xml/point.xml";
      
      if(file_exists($filename)){ //si le fichier existe on le supprime
		   unlink($filename);
		  }
		  
	  //creation du fichier xml
		  
		 $xml  = '<?xml version="1.0" encoding="utf-8" standalone="yes" ?>';
		 $xml .= '<markers>';
			while($point=$req->fetch(PDO::FETCH_OBJ)){
				 $xml .= "<marker id='".$point->idPluvio."'  lat='".$point->latitude."'  lng='".$point->longitude."'  
					 
				    description='".nl2br("&lt;div  class=\"window\" &gt;".$point->zone."&lt;br /&gt;".$point->description."&lt;/div&gt;")."' />";
					
		 }	//fin boucle while	
	 $xml .= '</markers >';
		 
	     file_put_contents("$filename",$xml); //pour generer le fichier xml
	     
	     header('location:index.php');
	     exit();
	     
	
	?>
	
	
	</section>


</body>
</html>
