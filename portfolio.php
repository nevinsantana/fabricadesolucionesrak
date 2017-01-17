<!doctype html>
<html>
	<head>
		<?php include("structure/lang-switch.php"); ?>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/png" href="assets/img/favicon.ico">
		<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
		integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
		crossorigin="anonymous">
		<link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
		<link rel="stylesheet" href="assets/css/owl.theme.default.css" />
		<link href="assets/css/style.css" rel="stylesheet">
		<title>Fabrica de Soluciones | Portfolio</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.jkit.custom.1.2.16.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
		<script src="assets/js/owl.carousel.min.js"></script>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-90100522-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body>
		<div class="allCont"><!--Inicia el contenido de toda la página-->
			<div class="menu-top3"><!--Menu-->
				<div class="relativer">
					<nav class="navbar navbar-default transp navbar-allh">
						<div class="container-fluid">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed menu-button"
								data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
								aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="index.php<?php echo $nextLan; ?>">
									<img src="assets/img/topa-menu-logo.svg" alt="Logo RAK">
								</a>
							</div>
							<div class="collapse navbar-collapse navbar-right"
							id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="index.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo HOME_NAVBAR; ?></a></li>
									<li><a href="services.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo SERV_NAVBAR; ?></a></li>
									<li><a href="#" class="menu-sol active"><?php echo PORTF_NAVBAR; ?></a></li>
									<li><a href="about.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo ABOUT_NAVBAR; ?></a></li>
									<li>
										<a href="contact.php<?php echo $nextLan; ?>" class="menu-sol a-contactanos-menu">
											<p class="menucontactanos-topa"><?php echo CONTACT_NAVBAR; ?></p>
										</a>
									</li>
									<li><a href="?lang=<?php echo $antilang; ?>" class="menu-sol"><?php echo LANG_NAVBAR; ?></a></li>
									<li class="dropdown text-center">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"
										role="button" aria-haspopup="true" aria-expanded="false">
											<i class="glyphicon glyphicon-menu-hamburger menu-sol"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="https://www.facebook.com/FabricaDeSolucionesRak/?fref=ts"
												target="_blank">
													<span class="fa-stack fa-lg social-icon-foot">
														<i class="fa fa-circle fa-stack-2x menu-circle"></i>
														<i class="fa fa-facebook fa-stack-1x fa-inverse menu-logo"></i>
													</span>
												</a>
											</li>
											<li>
												<a href="https://twitter.com/fabricarak" target="_blank">
													<span class="fa-stack fa-lg social-icon-foot">
														<i class="fa fa-circle fa-stack-2x menu-circle"></i>
														<i class="fa fa-twitter fa-stack-1x fa-inverse menu-logo"></i>
													</span>
												</a>
											</li>
											<li>
												<a href="https://www.linkedin.com/company/2019418?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A2019418%2Cidx%3A3-1-3%2CtarId%3A1480464427766%2Ctas%3Afabrica%20de%20sol"
												target="_blank">
													<span class="fa-stack fa-lg social-icon-foot">
														<i class="fa fa-circle fa-stack-2x menu-circle"></i>
														<i class="fa fa-linkedin fa-stack-1x fa-inverse menu-logo"></i>
													</span>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>
				</div>
			</div><!--/Menu-->
			<section class="top-a" id="top-a"><!--Primera sección-->
				<div class="top-a-0"></div><!--Capa naranja-->
				<div class="top-a-1">
					<div class="container-fluid top-a-objects wh100">
						<div class="objects-container">

							<div class="cookie-font oc-title oc-title-1">
								<?php echo PORTADA_TEXT_00_PORTF; ?>
							</div>
							 <div class="party-one-font text-uppercase oc-title oc-title-2">
							 	<?php echo PORTADA_TEXT_01_PORTF; ?>
							 </div>

							<div class="party-one-font oc-title-3 oc-title">
								<?php echo PORTADA_TEXT_02_PORTF; ?>
							</div>
							<div class="normal-font oc-title-4 oc-title">
								<?php echo PORTADA_TEXT_03_PORTF; ?>
							</div>

							<img src="assets/img/portfolio/zona-a.png" alt="">
						</div>
					</div>
				</div>
			</section><!--/Primera sección-->
			<section class="zona-c zonac-portfolio">
				<div class="row row-nomargin">
					<div class="col-md-12 partec-title-container">
						<h2><?php echo P1_TITLE_PORTF; ?></h2>
					</div>
				</div>
				<div class="row row-nomargin">
					<div class="col-md-12 no-padding-col">
						<div class="col-md-10 col-md-offset-1 logos-parent">

							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo01.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo02.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo14.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo03.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo04.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo05.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo06.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo07.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo08.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo09.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo10.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo11.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/imagenes-34.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo12.svg" alt="">
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="portfolio-partec-outer-cuadro">
									<div class="portfolio-inner-cuadro">
										<img src="assets/img/portfolio/logo13.svg" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				</section>

			<?php include("structure/footer.php") ?>

		</div><!--/Inicia el contenido de toda la página-->
		<script src="assets/js/script.js"></script>
		<script>//Funciones llamadas en esta página
			$(document).ready(function(){
				$(".portfolio-partec-carousel2").owlCarousel({
					loop:true,
					mouseDrag:true,
					dots:false,
					autoplay:false,
					autoplayTimeout:3000,
					autoplayHoverPause:true,
					responsiveClass:true,
					autoplaySpeed:1000,
					navText: ["<img src='assets/img/portfolio/zonab-arrow-left.svg'>","<img src='assets/img/portfolio/zonab-arrow-right.svg'>"],
					responsive:{
							0:{
									items:1,
									nav:false
							},
							600:{
									items:3,
									nav:false
							},
							1000:{
									items:4,
									nav:true,
									loop:true,
									margin:50,
							}
					}
				});
			});
			$(window).resize(function(){
			});
			window.sr = ScrollReveal();
			sr.reveal('.zona-a-img-container img', {
				duration: 3000,
				reset: true,
				viewFactor: 0.2,
			});
			sr.reveal('.logos-parent .col-sm-3', {
				duration: 2000,
				reset: true,
				viewFactor: 0.2,
				responsive:{
					767:{
						duration:1000,
					}
				},
			});
		</script>
		<script src="assets/js/js.js"></script>
	</body>
</html>
