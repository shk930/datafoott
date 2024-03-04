<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
    // L'utilisateur n'est pas connecté, rediriger vers la page d'accueil
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="images/logo.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Score</title>

		<!-- bootstrap core css -->
		<link rel="stylesheet" type="text/css" href="./css_1/bootstrap.css" />

		<!-- fonts style -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
		<!--owl slider stylesheet -->
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
		<!-- nice select -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
		<!-- font awesome style -->
		<link href="./css_1/font-awesome.min.css" rel="stylesheet" />
	  
		<!-- Custom styles for this template -->
		<link href="./css_1/style.css" rel="stylesheet" />
		<!-- responsive style -->
		<link href="./css_1/responsive.css" rel="stylesheet" />

      <!-- MON CSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS -->

      <link rel="stylesheet" href="css/default.css">
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/media-queries.css">
      <link rel="stylesheet" href="css/magnific-popup.css">

      <script src="js/modernizr.js"></script>
      <link rel="shortcut icon" href="datafoot.png" >

      <link rel="shortcut icon" href="./images/datafoot.png" type="image/x-icon">


      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

   <style>
      #nav-wrap {
          display: flex;
          justify-content: center;
      }

      .nav {
          list-style: none;
          margin: 0;
          padding: 0;
      }

      .nav li {
          display: inline;
          margin-right: 20px; /* pour un peu d'espace entre les éléments de la liste */
      }

      .nav a {
          text-decoration: none;
      }
  </style>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li><a class="nav-link" href="./index.php">Accueil</a></li>
            <li><a class="nav-link" href="./about.php">À propos</a></li>
	         <li class="current"><a class="nav-link" href="./score.php">score</a></li>
            <li><a class="nav-link" href="#" onclick="logout()">Déconnexion</a></li>
         </ul> <!-- end #nav -->

      </nav>

		

		<!-- Start Why Choose Us Section -->
		<section id="scores">
         <div class="row">
             <div class="twelve columns"><br><br><br><br><br>
                 <h2 style="color: white;">Scores en direct</h2><br><br>
             </div>
         </div>
         
         <div class="row">
             <div class="twelve columns">
               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/1.png">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                               <h5>En savoir plus</h5>
                            </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
                </div>

                 <div class="score-item">
                  <div class="columns portfolio-item">
                     <div class="item-wrap">
   
                        <a href="#modal-01" title="">
                           <img alt="" src="images/2.png">
                           <div class="overlay">
                              <div class="portfolio-item-meta">
                                  <h5>En savoir plus</h5>
                               </div>
                           </div>
                           <div class="link-icon"><i class="icon-plus"></i></div>
                        </a>
   
                     </div>
                   </div>
                 </div>

                 <div class="score-item">
                  <div class="columns portfolio-item">
                     <div class="item-wrap">
   
                        <a href="#modal-01" title="">
                           <img alt="" src="images/3.png">
                           <div class="overlay">
                              <div class="portfolio-item-meta">
                                  <h5>En savoir plus</h5>
                               </div>
                           </div>
                           <div class="link-icon"><i class="icon-plus"></i></div>
                        </a>
   
                     </div>
                   </div>
                 </div>
                 <!-- Ajoutez d'autres matchs selon vos besoins -->
             </div>
         </div>
     </section>
      <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="copyright">
               <li>Ceevee &copy; Copyright 2016</li>
               <li>Design by <a href="http://srikrishnacommunication.com/Giridesigns.php" title="Styleshout" target="_blank">Giri Designs</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->
		<!-- End Footer Section -->	


		<script src="js/bootstrap.bundle.min.js"></script>
		<script src="js/tiny-slider.js"></script>
		<script src="js/custom.js"></script>

<script>
   function logout() {
      if (confirm("Voulez-vous vous déconnecter ?")) {
         window.location.href = "logout.php";
      }
   }
</script>

	</body>

</html>
