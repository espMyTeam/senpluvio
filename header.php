<?php require ("debug.php");?>

<html lang="fr">
<head>

    <meta charset="utf-8">
    <title>PLuviometrie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description">
    <meta name="author" content="DIC2-TR">

    <!-- The styles -->
      <link id="bs-css" href="css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="css/charisma-app.css" rel="stylesheet">
    <link href='bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='css/jquery.noty.css' rel='stylesheet'>
    <link href='css/noty_theme_default.css' rel='stylesheet'>
    <link href='css/elfinder.min.css' rel='stylesheet'>
    <link href='css/elfinder.theme.css' rel='stylesheet'>
    <link href='css/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='css/uploadify.css' rel='stylesheet'>
    <link href='css/animate.min.css' rel='stylesheet'>
    
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/u/dt/jq-2.2.3,dt-1.10.12/datatables.min.css"/>
 
    <script type="text/javascript" src="https://cdn.datatables.net/u/dt/jq-2.2.3,dt-1.10.12/datatables.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
   <script src="js/util.js"></script>
  
</head>

<body>
<?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-inner">
            <a class="navbar-brand" href="#"> <img alt="Charisma Logo" src="img/logo20.png" class="hidden-xs"/>
                <span>PLuviometrie</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"><a href="deconnexion.php"> D&eacute;onnexion </a></span>
                    <span class="caret"></span>
                </button>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
            <div class="btn-group pull-right theme-container animated tada">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-tint"></i><span
                        class="hidden-sm hidden-xs"><a href="#"><?php echo $_SESSION['nom']." connecté"?></a></span>
                    <span class="caret"></span>
                </button>
            </div>
            <!-- theme selector ends -->

        </div>
    </div>
    <!-- topbar ends -->
<?php } ?>
<div class="ch-container">
    <div class="row">
        <?php if (!isset($no_visible_elements) || !$no_visible_elements) { ?>
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">
                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Menu</li>
                        <li><a class="ajax-link" href="index.php"><i class="glyphicon glyphicon-home"></i><span> Accueil</span></a>
                        </li>
                        <li><a class="ajax-link" href="chart.php"><i class="glyphicon glyphicon-eye-open"></i><span> Statistique</span></a>
                        </li>
                        <li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-list-alt"></i><span>Contact</span></a>
                        </li>
                         <li><a class="ajax-link"   href="ajouter_pluvio.php"><i class="glyphicon glyphicon-list-alt"></i><span> Ajouter pluvios </span></a></li>
                          <li><a class="ajax-link"  href="lister_pluvio.php"><i class="glyphicon glyphicon-list-alt"></i><span>Lister pluvios  </span></a></li>      
                           
                         <li><a class="ajax-link" href="sqlToXml.php"><i class="glyphicon glyphicon-list-alt"></i><span>Apropos</span></a>
                        </li>
                        
                    </ul>
                
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
        
          <!-- jQuery -->
   
    
 <?php } ?>
