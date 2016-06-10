<?php 
session_start();
require_once "connexion.php";


$req=$bdd->prepare(" SELECT * FROM pluviometre" );
$req->execute();

if(isset($_SESSION['login']))
{
	
require('header.php'); 
?>
    <div>
        <ul class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Pluviometres</a>
            </li>
        </ul>
    </div>

    <div class="row">
    <div class="box col-md-8">
    <div class="box-inner">
    <div class="box-header well" data-original-title="">
        <h2><i class="glyphicon glyphicon-user"></i> Liste des pluviometres</h2>

        <div class="box-icon">
            <a href="#" class="btn btn-setting btn-round btn-default"><i class="glyphicon glyphicon-cog"></i></a>
            <a href="#" class="btn btn-minimize btn-round btn-default"><i
                    class="glyphicon glyphicon-chevron-up"></i></a>
            <a href="#" class="btn btn-close btn-round btn-default"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </div>
    <div class="box-content">
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
    <thead>
   <tr>
		<th><label>Zone</label></th>
		<th><label>Description</label></th>
		<th><label>Latitude</label></th>
		<th><label>Longitude</label></th>
		<th><label>Opreation</label></th>
	</tr>
    </thead>
    <tbody>
	<?php
    while($reponse=$req->fetch())
    { 
     ?>	
    <tr>
        <td class="center"><?php echo $reponse["zone"]?>        </td>
        <td class="center"><?php echo $reponse["description"]?> </td>
        <td class="center"><?php echo $reponse["latitude"]?>    </td>
        <td class="center"><?php echo $reponse["longitude"]?>   </td>
        <td> 
          <a class="btn btn-info"    href="modifier.php?code=<?php echo $reponse["idPluvio"]; ?>" ><i class="glyphicon glyphicon-edit icon-white"></i>  Modifier </a>
          <a class="btn btn-danger"  href="supprimer.php?code=<?php echo $reponse["idPluvio"];?>"><i class="glyphicon glyphicon-trash icon-white"></i> Supprimer </a>
        </td>
    </tr>
   <?php  }?>	 
    
    </tbody>
    </table>
    </div>
    </div>
    <!--/span-->
    </div><!--/row-->
<?php 
require('footer.php');

}
else
	{
	header("location:form.php");
	}
?>
