<?php
include_once './lib/portfolio-function.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SAE 4.01</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/flexslider.css">
	<link rel="stylesheet" href="assets/fonts/icomoon/style.css">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">



<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
            <?php render_nav_menu(); ?>
        </div>
    </div>
</nav>




	<section class="site-hero" style="background-image: url(images/image_1.jpg);" id="section-home" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row intro-text align-items-center justify-content-center">
				<div class="col-md-10 text-center pt-5">

					<h1 class="site-heading site-animate">Bonjour, Je suis <strong class="d-block">Fily TOURE</strong></h1>
					<strong class="d-block text-white text-uppercase letter-spacing">et voici mon portfolio</strong>

				</div>
			</div>
		</div>
	</section> <!-- section -->






	<section class="site-section" id="section-portfolio">
		<div class="container">
			<div class="row">
				<div class="section-heading text-center col-md-12">
					<h2><strong>Portfolio</strong> en vedette</h2>
				</div>
			</div>
			<div class="filters">
				<ul>
					<li class="active" data-filter="*">Tous</li>
					<li data-filter=".packaging">Développement Web</li>
					<li data-filter=".mockup">Conception digitale </li>
					<li data-filter=".typography">Gestion de Projet</li>
					<li data-filter=".photography">Création audiovisuelle</li>
					<li data-filter=".photography">Projets académiques</li>
				</ul>
			</div>
 
			<div class="filters-content">
				<div class="row grid">
					<div class="single-portfolio col-sm-4 all mockup">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p1.jpg" alt="">
							</div>
							<a href="images/p1.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                  
						</div>
						<div class="p-inner">
							<h4>Square Box Mockup</h4>
							<div class="cat">Mockup</div>
						</div>                                         
					</div>
					<div class="single-portfolio col-sm-4 all mockup">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p2.jpg" alt="">
							</div>
							<a href="images/p2.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                  
						</div>
						<div class="p-inner">
							<h4>Product Box Package Mockup</h4>
							<div class="cat">Mockup</div>
						</div>                                         
					</div>                            
					<div class="single-portfolio col-sm-4 all packaging">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p3.jpg" alt="">
							</div>
							<a href="images/p3.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a> 

						</div>
						<div class="p-inner">
							<h4>Creative Package Design</h4>
							<div class="cat">Packaging</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all packaging">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p4.jpg" alt="">
							</div>
							<a href="images/p4.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div> 
						<div class="p-inner">
							<h4>Packaging Brand</h4>
							<div class="cat">Packaging</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all typography">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p5.jpg" alt="">
							</div>
							<a href="images/p5.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div>
						<div class="p-inner">
							<h4>Isometric 3D Extrusion</h4>
							<div class="cat">Typography</div>
						</div>
					</div>
					<div class="single-portfolio col-sm-4 all photography">
						<div class="relative">
							<div class="thumb">
								<div class="overlay overlay-bg"></div>
								<img class="image img-fluid" src="images/p6.jpg" alt="">
							</div>
							<a href="images/p6.jpg" class="img-pop-up">  
								<div class="middle">
									<div class="text align-self-center d-flex"><img src="images/preview.png" alt=""></div>
								</div>
							</a>                                
						</div>
						<div class="p-inner">
							<h4>White Space Photography</h4>
							<div class="cat">photography</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- .section -->

	
	<section class="site-section " id="section-resume">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Mon <strong>CV</strong></h2>
					</div>
				</div>
				<div class="col-md-6">
					<h2 class="mb-5">Formation</h2>
					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Septembre 2024 - Actuel</span>
						<h3>BUT Métiers du Multimédias et de l'Internet</h3>
						<p>Communication digitale, création multimédia, développement web et gestion de projets.</p>
						<span class="school">New York University</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span>Juillet 2023</span>
						<h3>Baccalauréat série générale, Sciences Économiques et Sociales et Mathématiques</h3>
						<p>Mention Assez Bien</p>
						<span class="school">Lycée Charles Baudelaire, Fosses</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Mai 2022</span>
						<h3>Formation civique et citoyenne</h3>
						<p>Dans le cadre d'un service civique de 8 mois au sein d'un club de football.</p>
						<span class="school">Astérya, Paris</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Mars 2022</span>
						<h3>Brevet de secourisme (PSC1)</h3>
						<p>Maîtrise des gestes de premiers secours et gestion des situations d’urgence.</p>
						<span class="school">Centre social socio-culturel Boris Vian, Villiers-le-Bel</span>
					</div>

				</div>
				<div class="col-md-6">


					<h2 class="mb-5">Expériences</h2>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Octobre 2023 - Actuel</span>
						<h3>Community Manager</h3>
						<p>Tournage, post-production et déploiement de stratégies de communication sur les réseaux sociaux.</p>
						<span class="school">Sabaïdi Sushi Thaï</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Facebook</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> March 2013 - Present</span>
						<h3>Lead Product Designer</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
						<span class="school">Twitter</span>
					</div>

					<div class="resume-item mb-4">
						<span class="date"><span class="icon-calendar"></span> Novembre 2023 </span>
						<h3>Création d'une affiche</h3>
						<p>Création d’une affiche pour le service jeunesse de la ville de Fosses dans le cadre d’une étude sur les besoins des jeunes.</p>
						<span class="school">Mairie de Fosses</span>
					</div>


				</div>
			</div>
		</div>
	</section> <!-- .section -->

	<section class="site-section" id="section-about">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
					<img src="images/image_1.jpg" alt="Image placeholder" class="img-fluid">
				</div>
				<div class="col-lg-5 pl-lg-5">
					<div class="section-heading">
						<h2>À propos de <strong>Moi</strong></h2>
					</div>
					<p class="lead">À travers ce portfolio, je vous invite à découvrir mes projets et l’univers créatif que je façonne au fil de mon parcours. Curieuse, polyvalente et déterminée, je cherche à donner vie à des idées percutantes, alliant technique et esthétique, avec l’ambition d’apprendre et d’innover. </p> 
					<p class="mb-5  ">Actuellement, je recherche un stage de 10 semaines en développement web, tout en restant ouverte aux opportunités en communication ou en création visuelle, du 13 avril au 26 juin.</p>

					<p>
						<a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll">Contacter</a>
						<a href="./cv401.pdf" class="btn btn-secondary px-4 py-2 btn-sm">Télécharger mon CV</a>
					</p>
				</div>
			</div>


		</div>
	</section>


	<section class="site-section pb-0"  id="section-services">
		<div class="container">

			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading text-center">
						<h2>Mes <strong>Compétences</strong></h2>
					</div>
				</div>
			</div>
			<div class="row">

				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-browser2"></span>
						</span>
						<h3 class="mb-4">Web Design</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-presentation"></span>
						</span>
						<h3 class="mb-4">Search Engine Optimization</h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 text-center mb-5">
					<div class="site-service-item site-animate" data-animate-effect="fadeIn">
						<span class="icon">
							<span class="icon-video2"></span>
						</span>
						<h3 class="mb-4">Video Editing</h3>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
						<p><a href="#" class="site-link">Learn More <i class="icon-chevron-right"></i></a></p>
					</div>
				</div>

				

			</div>
		</div>
	</section>

	<section class="site-section" id="section-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mb-5">
					<div class="section-heading text-center">
						<h2>Entrer <strong>En Contact</strong></h2>
					</div>
				</div>

				<div class="col-md-7 mb-5 mb-md-0">
					<form action="" class="site-form">
						<h3 class="mb-5">Me contacter</h3>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" class="form-control px-3 py-4" placeholder="Votre prénom">
						</div>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" class="form-control px-3 py-4" placeholder="Votre nom">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control px-3 py-4" placeholder="janedoe@gmail.com">
						</div>
						<div class="form-group">
							<label>Téléphone</label>
							<input type="email" class="form-control px-3 py-4" placeholder="Your Phone">
						</div>
						<div class="form-group mb-5">
							<label>Votre message</label>
							<textarea class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-primary  px-4 py-3" value="Soumettre">
						</div>
					</form>
				</div>
				<div class="col-md-5 pl-md-5">
					<h3 class="mb-5">Mes coordonnées</h3>
					<ul class="site-contact-details">
						<li>
							<span class="text-uppercase">Email</span>
							fily.toure05@gmail.com
						</li>
						<li>
						<span class="text-uppercase">Téléphone</span>
							+33 6 43 12 00 96
						</li>
						<li>
							<span class="text-uppercase">Adresse</span>
							Val d'Oise (95)
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	<footer class="site-footer">
		<div class="container">

			<div class="row mb-5">
				<p class="col-12 text-center">
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true" ></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
			
			<div class="row mb-5">
				<div class="col-md-12 text-center">
				<?php render_social_links(); ?>
				</div>
			</div>
			
		</div>
	</footer>




	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/vendor/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>

	<script src="js/vendor/jquery.easing.1.3.js"></script>

	<script src="js/vendor/jquery.stellar.min.js"></script>
	<script src="js/vendor/jquery.waypoints.min.js"></script>

	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
	<script src="js/custom.js"></script>

	<!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    	<script src="js/google-map.js"></script> -->

    </body>
    </html>