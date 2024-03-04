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
		<title>À Propos de nous</title>

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
            <li class="current"><a class="nav-link" href="./about.php">À propos</a></li>
	         <li><a class="nav-link" href="./score.php">score</a></li>
            <li><a class="nav-link" href="./register.php">Inscription</a></li>
            <li><a class="nav-link" href="./connexion.php"><img src="images/user.svg"></a></li>
         </ul> <!-- end #nav -->

      </nav>

		

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
         <div class="container">
             <div class="row justify-content-between align-items-center">
                 <div class="col-lg-6" style="padding-bottom: 30px;">
                     <br><br><br><br><br><h2 class="section-title" style="color: white;">Pourquoi vous devriez nous choisir?</h2>
                     <p>
                         Parce que vous méritez d'être récompensé pour votre passion 
                         avec des fonctionnalités uniques et des avantages réservés 
                         aux membres. Découvrez Score Express, votre plateforme en 
                         ligne pour suivre les scores de football en temps réel. Des
                         mises à jour rapides et précises pour ne rien manquer des
                         matchs passionnants.
                     </p>
                 </div>
     
                 <div class="col-lg-5">
                     <div class="img-wrap">
                         <img src="images/4.PNG" alt="Image" class="img-fluid" >
                     </div>
                 </div>
     
             </div>
         </div>
     </div>
     
		<!-- End Why Choose Us Section -->

		<!-- Start Footer Section -->
		<section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <strong><p class="lead" style="color: white;">Un bug ? Vous voulez travailler chez nous ? Envoyer nous un message par mail</p>
                  </strong>
            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">Nom <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">Objet</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">Envoyer</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Erreur d'envoie</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Votre message a été envoyé !<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   DataFoot<br>
						   69 Rue de Turbigo <br>
						   75003 Paris 03<br>
						   <span>01 53 01 14 10</span>
					   </p>

				   </div>

            </aside>

      </div>

   </section> <!-- Contact Section End-->


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
	</body>

</html>
