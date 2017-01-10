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
		<link href="assets/css/style.css" rel="stylesheet">
		<title>Fabrica de Soluciones | Acerca de</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.jkit.custom.1.2.16.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
	</head>
	<body>
		<div class="allCont"><!--Inicia el contenido de toda la página-->
			<div class="menu-top3"><!--Menu-->
				<div class="relativer">
					<nav class="navbar navbar-default transp">
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
									<li><a href="portfolio.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo PORTF_NAVBAR; ?></a></li>
									<li><a href="#" class="menu-sol active"><?php echo ABOUT_NAVBAR; ?></a></li>
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
								<?php echo PORTADA_TEXT_00_ABOUT; ?>
							</div>
							 <div class="party-one-font text-uppercase oc-title oc-title-2">
							 	<?php echo PORTADA_TEXT_01_ABOUT; ?>
							 </div>

							<div class="party-one-font oc-title-3 oc-title">
								<?php echo PORTADA_TEXT_02_ABOUT; ?>
							</div>
							<div class="normal-font oc-title-4 oc-title">
								<?php echo PORTADA_TEXT_03_ABOUT; ?>
							</div>

							<img src="assets/img/about/zona-a.png" alt="">
						</div>
					</div>
				</div>
			</section><!--/Primera sección-->
			<section class="zona-b">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1 zona-b-tdesc">
						<p><?php echo P1_TEXT_00_ABOUT; ?></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div id="about-zonab-carousel" class="carousel slide about-zonab-carousel" data-ride="carousel">

							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="row zonab-img-container">
										<img src="assets/img/about/carousel-item1.png" alt="">
									</div>
									<div class="row">
										<div class="col-md-12 zonab-desc-contianer">
											<h4 class="zonab-year"><?php echo P1_CAROUSEL_YEAR_00; ?></h4>
											<p class="zonab-desc">
												<?php echo P1_CAROUSEL_CAPTION_00; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row zonab-img-container">
										<img src="assets/img/about/carousel-item2.png" alt="">
									</div>
									<div class="row">
										<div class="col-md-12 zonab-desc-contianer">
											<h4 class="zonab-year"><?php echo P1_CAROUSEL_YEAR_01; ?></h4>
											<p class="zonab-desc">
												<?php echo P1_CAROUSEL_CAPTION_01; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row zonab-img-container">
										<img src="assets/img/about/carousel-item4.png" alt="">
									</div>
									<div class="row">
										<div class="col-md-12 zonab-desc-contianer">
											<h4 class="zonab-year"><?php echo P1_CAROUSEL_YEAR_02; ?></h4>
											<p class="zonab-desc">
												<?php echo P1_CAROUSEL_CAPTION_02; ?>
											</p>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="row zonab-img-container">
										<img src="assets/img/about/carousel-item3.png" alt="">
									</div>
									<div class="row">
										<div class="col-md-12 zonab-desc-contianer">
											<h4 class="zonab-year"><?php echo P1_CAROUSEL_YEAR_03; ?></h4>
											<p class="zonab-desc">
												<?php echo P1_CAROUSEL_CAPTION_03; ?>
											</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#about-zonab-carousel" role="button" data-slide="prev">
								<div class="zonab-arrow-container">
									<img src="assets/img/about/zonab-arrow-left.svg" alt="">
								</div>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#about-zonab-carousel" role="button" data-slide="next">
								<div class="zonab-arrow-container">
									<img src="assets/img/about/zonab-arrow-right.svg" alt="">
								</div>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="zona-c">
				<section class="zona-c-title">
					<div class="row">
						<div class="col-md-12 zona-c-tcontainer">
							<span class="zona-c-t1"><?php echo P2_T00_ORANGE_ABOUT; ?></span>
							<span class="zona-c-t2"><?php echo P2_T01_ORANGE_ABOUT; ?></span>
						</div>
					</div>
				</section>
				<section class="zonac-content">
					<div class="row">
						<div class="col-sm-4">
							<div class="col-xs-8 col-xs-offset-2 zonac-img-container">
								<img src="assets/img/about/zonac-item1.png" alt="">
							</div>
							<div class="break"></div>
							<h3 class="zonac-square-title"><?php echo P2_BRAND_TITLE_ABOUT; ?></h3>
							<div class="orange-line"></div>
							<div class="col-sm-8 col-sm-offset-2 zonac-description-container">
								<p>
									<?php echo P2_BRAND_TEXT_ABOUT; ?>
									</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-xs-8 col-xs-offset-2 zonac-img-container">
								<img src="assets/img/about/zonac-item2.png" alt="">
							</div>
							<div class="break"></div>
							<h3 class="zonac-square-title"><?php echo P2_ENGAGE_TITLE_ABOUT; ?></h3>
							<div class="orange-line"></div>
							<div class="col-sm-8 col-sm-offset-2 zonac-description-container">
								<p>
									<?php echo P2_ENGAGE_TEXT_ABOUT; ?>
								</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="col-xs-8 col-xs-offset-2 zonac-img-container">
								<img src="assets/img/about/zonac-item3.png" alt="">
							</div>
							<div class="break"></div>
							<h3 class="zonac-square-title"><?php echo P2_CONVER_TITLE_ABOUT; ?></h3>
							<div class="orange-line"></div>
							<div class="col-sm-8 col-sm-offset-2 zonac-description-container">
								<p>
									<?php echo P2_CONVER_TEXT_ABOUT; ?>
								</p>
							</div>
						</div>
					</div>
				</section>
			</section>

			<?php include("structure/footer.php") ?>

		</div><!--/Inicia el contenido de toda la página-->
		<script src="assets/js/script.js"></script>
		<script>//Funciones llamadas en esta página
			$(document).ready(function(){
			});
			$(window).resize(function(){
			});
			window.sr = ScrollReveal();
			sr.reveal('.zona-a-img-container img', {
				duration: 3000,
				reset: true,
				viewFactor: 0.2,
			});
			sr.reveal('.zonac-img-container img', {
				duration: 1000,
				reset: true,
				viewFactor: 0.4,
			});
		</script>
		<script src="assets/js/js.js"></script>
	</body>
</html>
