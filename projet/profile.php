<?php
ob_start();
session_start();
error_reporting(0);
if(!isset($_SESSION["name"])){
    header('Location: index.php');
}
$servername = "localhost";
$username = "root";
$password = "MyNewPass";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$req= "SELECT * FROM projetphp.".$_SESSION["type"]." where E_mail = '".$_SESSION["mail"]."';";
$result = $conn->query($req);
if ($result->num_rows == 1){
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <title>COVIDO</title>
	   	<!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	    <!-- Bootstrap Core CSS -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
	    <!-- Flaticon CSS -->
	    <link href="fonts/flaticon/flaticon.css" rel="stylesheet">
	    <!-- font-awesome CSS -->
	    <link href="css/font-awesome.min.css" rel="stylesheet">
	    <!-- Offcanvas CSS -->
	    <link href="css/hippo-off-canvas.css" rel="stylesheet">
	    <!-- animate CSS -->
	    <link href="css/animate.css" rel="stylesheet">
	    <!-- language CSS -->
	    <link href="css/language-select.css" rel="stylesheet">
	    <!-- owl.carousel CSS -->
	    <link href="owl.carousel/assets/owl.carousel.css" rel="stylesheet">
		<!-- magnific-popup -->
    	<link href="css/magnific-popup.css" rel="stylesheet">
    	<!-- Main menu -->
    	<link href="css/menu.css" rel="stylesheet">
    	<!-- Template Common Styles -->
    	<link href="css/template.css" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- Responsive CSS -->
	    <link href="css/responsive.css" rel="stylesheet">

	    <script src="js/vendor/modernizr-2.8.1.min.js"></script>
	    <!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
		    <script src="js/vendor/html5shim.js"></script>
		    <script src="js/vendor/respond.min.js"></script>
	    <![endif]-->
	</head>

	

	<body id="page-top">
		<div id="st-container" class="st-container">
    		<div class="st-pusher">
    			<div class="st-content">
					<header class="header">
						<nav class="top-bar">
							<div class="overlay-bg">
								<div class="container">
									<div class="row">
										
										<div class="col-sm-6 col-xs-12">
											<div class="call-to-action">
												<ul class="list-inline">
													<li><i class="fa fa-phone"> 90-110-144</i> </li>
													<li><i class="fa fa-envelope"> Hadhami.ouni@etudiant-fst.utm.tn</i> </li>
												</ul>
											</div>
										</div>

										<div class="col-sm-6 hidden-xs">
											<div class="topbar-right">
												
												<ul class="social-links list-inline pull-right">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
												</ul>
											</div>
										</div>
									</div><!-- /.row -->
								</div><!-- /.container -->
							</div><!-- /.overlay-bg -->
						</nav><!-- /.top-bar -->

						<div id="search">
						  <button type="button" class="close">×</button>
						  <form>
							  <input type="search" value="" placeholder="type keyword(s) here" />
							  <button type="submit" class="btn btn-primary">Search</button>
						  </form>
					  </div>
					  

					  
					  <nav class="navbar navbar-default" role="navigation">
						  
						  <div class="container mainnav">
							  <div class="navbar-header">
								  <h1 class="logo"><a class="navbar-brand" href="index.php"><img src="img/logo.png" width=190px height=40px alt=""></a></h1>
							  </div>

							  <!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-collapse">

									<span class="search-button pull-right"><a href="#search"><i class="fa fa-search"></i></a></span>

									<ul class="nav navbar-nav navbar-right">
									
                                        <li class="active"><a href="index.php">Acceuil <span class="fa "></span></a>
                                            
                                        </li>
                                        <?php if(!isset($_SESSION["name"])):
                                        ?>
                                        <li class="dropdown"><a> S'identifier <span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="espacemedecins.php"> Espace médecin </a></li>
                                                        <li><a href="espace_visiteur.php"> Espace visiteur</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                       <?php endif;
                                        $var = "";
                                        if($_SESSION["type"] == "doctor") $var = "Dr ";
                                        if(isset($_SESSION["name"])): 
                                        ?>
                                        <li class="dropdown"><a href=""><?php echo $var.$_SESSION["name"]; ?><span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="profile.php">visiter profil </a></li>
                                                        <li><a href="deconnecter.php">se déconnecter</a></li>
                
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <?php endif;?>
                                        <!-- /Pages -->
										<!-- Blog -->
                                        <li class="dropdown"><a href="forum.php">Forum & Questions <span class="fa"></span></a>
                                            <!-- submenu-wrapper -->

                                        </li>
                                        <li class="dropdown"><a href="guide.php">Guide Covid-19 <span class="fa"></span></a>
                                            
									</ul>
								</div><!-- /.navbar-collapse -->
						  </div><!-- /.container -->

						  
					  </nav>
				  </header>
					
					<section class="page-title-section">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="page-header-wrap">
										<div class="page-header">
									   		<h1>Profile</h1>
									   	</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					
                    <section class="team-service">
						<div class="container">
							<div class="row">
				                <div class="col-xs-12 text-center">
				                  <h2 class="section-title">Consulter vos informations</h2>
                                  <span class="section-sub">Et modifier votre mot de passe</span>

				                </div>
			             	 </div>
							
							<div class="team-service-contents">
								<div class="row">
									<div class="col-sm-4">
										<div class="team-service-testimonial">
											<h2>Modifier votre mot de passe</h2>
                                            <form method=post action="profile.php">
                                                <div>
                                                    <div class="form-group">
                                                        <label for="ancien">Ancien mot de passe</label>
                                                        <input id="ancien" name="ancien" type="password" class="form-control"  required>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="form-group">
                                                        <label for="nouveau">Nouveau mot de passe</label>
                                                        <input id="nouveau" name="nouveau" type="password" class="form-control"  required>
                                                    </div>
                                                </div>

                                                <div>
                                                    <div class="form-group">
                                                        <label for="repeter">Répétez votre mot de passe</label>
                                                        <input id="repeter" name="repeter" type="password" class="form-control" placeholder="" required>
                                                    </div>
                                                </div>
                                                
                                                <div>
                                                    <button type="submit" class="btn btn-success">Confirmer</button> 
                                                </div>
                                                
                                                
                                            </form>
											
										</div> 
									</div><!--/.col-->
                                        <?php
                                    $erreur = "";
                                    if(isset($_POST["ancien"]) && isset($_POST["nouveau"]) && isset($_POST["repeter"])){
                                        if($_POST["ancien"] == $row["password"]){
                                            if($_POST["nouveau"] == $_POST["repeter"]){
                                                header('Location: mdp.php?nouveau='.$_POST["nouveau"]);
                                            }
                                            else
                                            $erreur = "veuillez entrer le même mot de passe 2 fois ";
                                        }
                                        else
                                        $erreur = "le mot de passe que vous avez entré est erroné ";

                                        
                                    } 
                                    echo $erreur;
                                ?>
                                    <div class="col-sm-7 col-lg-offset-1">
                                        <div class="profile">
                                            <h3>
                                                <span class="profile"> Nom et prénom : </span>
                                                <em><span id="nom"> <?= $row["nom"]." ".$row["prenom"] ?> </span></em>
                                                <hr><br>

                                                <span> Numéro de téléphone : </span>
                                                <em><span id="tel"><?= $row["tel"] ?></span></em>
                                                <hr><br>

                                                <span> E-mail : </span>
                                                <em><span id="email"> <?= $row["E_mail"] ?> </span></em>
                                                <hr><br>

                                            </h3>
                                        </div><!--/.career-contents -->

                                    </div>
								</div><!--/.row-->
							</div>
						</div><!-- /.container-->
					</section>
					<!-- /.team-service -->
			       
			        
			    <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	<div class="container text-center">
			        		<div class="copyright-info">
			        			<span>Copyright © 2020 COVIDO. All Rights Reserved.<br> Designed by Hadhami El Ouni and Aziz Ben Hadj Yahia</span>
			        		</div>
			        	</div><!-- /.container -->
			        </footer>
				<!-- copyright-section end -->
			        
				</div> <!-- .st-content -->
    		</div> <!-- .st-pusher -->

	    	

		<!-- Preloader -->
		<div id="preloader">
			<div id="status">
				<div class="status-mes"></div>
			</div>
		</div>
        

		<!-- jQuery -->
	    <script src="js/jquery.js"></script>
	    <!-- Bootstrap Core JavaScript -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- owl.carousel -->
	    <script src="owl.carousel/owl.carousel.min.js"></script>
	    <!-- Magnific-popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Offcanvas Menu -->
		<script src="js/hippo-offcanvas.js"></script>
		<!-- inview -->
		<script src="js/jquery.inview.min.js"></script>
		<!-- stellar -->
		<script src="js/jquery.stellar.js"></script>
		<!-- countTo -->
		<script src="js/jquery.countTo.js"></script>
		<!-- classie -->
		<script src="js/classie.js"></script>
		<!-- selectFx -->
		<script src="js/selectFx.js"></script>
		<!-- sticky kit -->
		<script src="js/jquery.sticky-kit.min.js"></script>
	    <!-- GOGLE MAP -->
	    <script src="https://maps.googleapis.com/maps/api/js"></script>
	    <!--TWITTER FETCHER-->
	    <script src="js/twitterFetcher_min.js"></script>
	    <!-- Custom Script -->
	    <script src="js/scripts.js"></script>
	</body>
</html>