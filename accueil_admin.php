<?php 
session_start();
if(isset($_SESSION['login']))
{
 
require('header.php'); 
?>

<div >
	<div class="header  col-md-8">
		<ul class="breadcrumb">
			<li>
				<a href="accueil_admin.php"><Strong>Accueil</Strong></a>
			</li>
			<li>
				<a><Strong>Administration</Strong></a>
			</li>
		</ul>
    </div>
</div>

<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Total Members</div>
            <span class="notification">6</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="#">
            <i class="glyphicon glyphicon-star green"></i>

            <div>Chercheurs Connectés</div>
            <span class="notification green">4</span>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="liste_demande.php">
            <i class="glyphicon glyphicon-envelope red"></i>

            <div>Nombre Demande</div>
            <span class="notification red">12</span>
        </a>
    </div>
  </div>
  <div class="row">  
    <div class="box col-md-8 col-md-offset-2">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Espace Administration</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content row">
                <div class="col-lg-8 col-md-8">
                    <h1>Sen PLuvio<br>
                        <small>free, premium quality, responsive, multiple skin admin template.</small>
                    </h1>
                    <p>It's a live demo of the template. I have created Charisma to ease the repeat work I have to do on my
                        projects. Now I re-use Charisma as a base for my admin panel work and I am sharing it with you
                        :)</p>

                    <p><b>All pages in the menu are functional, take a look at all, please share this with your
                            followers.</b></p>
                </div>
                <!-- Ads end -->
			</div>
            </div>
    </div>
</div>

<?php 
require('footer.php');
}
else
	{
	header("location:form.php");
	}
?>
