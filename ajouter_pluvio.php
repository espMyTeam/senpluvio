<?php 
#=========== demarrer la session ===========================#
 
session_start();
if(isset($_SESSION['login']))
{
require('header.php');
?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="index.php">Accueil</a>
        </li>
        <li>
            <a href="#">Connexion</a>
        </li>
    </ul>
</div>
<div class="row">
	   <div class="box col-md-6 col-md-offset-2">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> New Pluviom&eacute;tre </h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form form="role" action="insertion.php" method="POST">
                    <div class="form-group">
                        <label for="zone">Zone</label>
                        <input type="text" class="form-control"   name="zone" placeholder="zone" required>
                    </div>
                    <div class="form-group">
                        <label for="latitude">Latitude</label>
                        <input type="text" class="form-control" name="latitude" placeholder="latitude" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Longitude</label>
                        <input type="text" class="form-control" i name="longitude" placeholder="longitude" required>
                    </div>
                    <div class="form-group">
                        <label for="longitude">Descritption</label>
                        <textarea type="textarea" class="form-control" i name="description" placeholder="description" required></textarea>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-default">Valider</button>
                </form>
            </div>
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

