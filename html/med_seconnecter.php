<?php 
ob_start();
session_start();
 if(isset($_SESSION["name"])){
   header('Location: index.php');
}
error_reporting(0);
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
		<link href="redbox.css" rel="stylesheet">

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
						    <button type="button" class="close">x</button>
						    <form methode=post action="forum.php">
						        <input type="search" value="" name="searchfor"  placeholder="type keyword(s) here" />
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
                                       
                                        <li class="dropdown"><a href="#">S'identifier <span class="fa fa-angle-down"></span></a>
                                            <div class="submenu-wrapper">
                                                <div class="submenu-inner">
                                                    <ul class="dropdown-menu">
                                                    	<li><a href="espacemedecins.php">Espace Médecin </a></li>
                                                        <li><a href="espace_visiteur.php">Espace visiteur</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="dropdown"><a href="forum.php">Forum<span class="fa"></span></a>
                                            
                                        </li>
                                       
                                        <li class="dropdown"><a href="guide.php">Guide Covid-19 <span class="fa"></span></a>
                                        <li class="dropdown"><a href="statMAP.php">Statistiques  <span class="fa"></span></a>

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
									   		<h1>Espace Médecins</h1>
                                        </div>
                                        <ol class="breadcrumb">
                                            <li><a href="index.php">Acceuil</a></h2></li>
                                              <li><a href="espacemedecins.php">Espace Médecins</a></li>
                                              <li class="active"><a href="med_seconnecter.php">Se Connecter</a> </li>
                                        </ol>
                                           
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<!--corps de la page-->
				<section class="single-service-contents">
                    <div class="container">	

						<div class="row">
                            <form method=post action="med_seconnecter.php">
                                <div class="form-group">
                                    <label for="med_cin">CIN</label>
                                    <input id="med_cin" name="med_cin" type="text" class="form-control" required="" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="med_password">Mot de passe</label>
                                    <input id="med_password" name="med_password" type="password" class="form-control" required="" placeholder="">
                                </div>

                                <button type="submit" class="btn btn-primary">Se connecter</button>
                            </form>
                                <br><br>
							<?php 
                            if(isset($_POST["med_cin"])){
                                 $servername = "localhost";
                                $username = "root";
                                $password = "MyNewPass";
                                $conn = new mysqli($servername, $username, $password);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }
                                $req= "SELECT * FROM projetphp.doctor where CIN = ".$_POST["med_cin"]." and password = '".$_POST["med_password"]."';";
                                $result = $conn->query($req);
                                if($result->num_rows == 1){
                                    $row = $result->fetch_assoc();
                                    if($row["accepted"] == "en attente"){
                                        echo "	<div id='main-alert-red'>votre demande n'est pas encore acceptée </div>";
                                    }
                                   else{ $_SESSION["id"] = $row["CIN"];
                                    $_SESSION["name"] = $row["nom"];
                                    $_SESSION["type"] = "doctor";
                                    $_SESSION["mail"] = $row["E_mail"];
                                    header('Location: index.php');
                                    }
                                } else echo "	<div id='main-alert-red'>donnés erroné <br> si vous n'avez pas un compte il faut s'inscrire </div> ";
                            }
                             ob_end_flush();
                            ?>
						</div>
					</div>
				</section>
			       
			        
			        <!-- copyright-section start -->
			        <footer class="copyright-section">
			        	<div class="container text-center">
			        		<div class="copyright-info">
			        			<span>Copyright © 2020 COVIDO. All Rights Reserved.<br> Designed by Hadhami El Ouni and Aziz Ben Hadj Yahia</span>
			        		</div>
			        	</div><!-- /.container -->
			        </footer>
<!-- copyright-section end -->
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