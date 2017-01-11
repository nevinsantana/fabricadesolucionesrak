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
		<title>RAK</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.jkit.custom.1.2.16.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
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
								<a class="navbar-brand" href="#">
									<img src="assets/img/topa-menu-logo.svg" alt="Logo RAK">
								</a>
							</div>
							<div class="collapse navbar-collapse navbar-right"
							id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="#" class="menu-sol active"><?php echo HOME_NAVBAR; ?></a></li>
									<li><a href="services.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo SERV_NAVBAR; ?></a></li>
									<li><a href="portfolio.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo PORTF_NAVBAR; ?></a></li>
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
							<img src="assets/img/Slide01.png" alt="">
						</div>
					</div>
				</div>
				<div class="top-a-2"><!--Capa título top-a-->
					<header class="menu-header"></header>
					<p class="lafabrica tit1"><?php echo PORTADA_00_HOME; ?></p>
					<p class="soluciones tit2"><?php echo PORTADA_01_HOME; ?></p>
				</div><!--/Capa título top-a-->
				<div class="top-a-3"><!--Capa menu y carousel-->
					<div class="col-md-12 carouselcont-top-a"><!--Carousel-->
						<div class="row ht100">
							<div class="col-md-3"></div>
							<div class="col-md-6 ht100">
								<div id="carousel-example-generic" class="carousel slide ht100" data-ride="carousel">
									<div class="carousel-inner ht100" role="listbox">
										<div class="item active robi">
											<div class="robo-w100">
												<div class="img-catopa"></div>
											</div>
											<div class="carousel-caption">
												<p class="creativas tit5"><?php echo PORTADA_02_HOME; ?></p>
												<p class="creades des1"><?php echo PORTADA_03_HOME; ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>
					</div><!--/Carousel-->
				</div><!--/Capa menu y carousel-->
			</section><!--/Primera sección-->
		<section class="top-b" id="top-b"><!--Segunda sección-->
			<div class="top-b-back"></div><!--Fondo fixed-->
			<div class="col-md-12 top-b-content"><!--Contenido top-b-->
				<div class="row">
					<h2 class="s2-title">
						<span class="s2t1"><?php echo P1_T00_HOME; ?></span>
						<span class="s2t2"><?php echo P1_T01_HOME; ?></span>
						<span class="s2t1"><?php echo P1_T02_HOME; ?></span>
					</h2>
				</div>
				<div class="row s2-cuadros-container">
					<div class="col-xs-3 cuadro-contenedor">
						<div class="outer-cuadro" id="s2t1">
							<div class="inner-cuadro">
								<div class="s2-cuadros-title">
									<h2><?php echo P1_C01_HOME; ?></h2>
								</div>
								<div class="orange-line"></div>
								<div class="image-container">
									<img src="assets/img/desarrolloweb.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 cuadro-contenedor">
						<div class="outer-cuadro" id="s2t2">
							<div class="inner-cuadro">
								<div class="s2-cuadros-title">
									<h2><?php echo P1_C02_HOME; ?></h2>
								</div>
								<div class="orange-line"></div>
								<div class="image-container">
									<img src="assets/img/marketing.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 cuadro-contenedor">
						<div class="outer-cuadro" id="s2t3">
							<div class="inner-cuadro">
								<div class="s2-cuadros-title">
									<h2><?php echo P1_C03_HOME; ?></h2>
								</div>
								<div class="orange-line"></div>
								<div class="image-container">
									<img src="assets/img/disenodigital.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-3 cuadro-contenedor">
						<div class="outer-cuadro" id="s2t4">
							<div class="inner-cuadro">
								<div class="s2-cuadros-title">
									<h2><?php echo P1_C04_HOME; ?></h2>
								</div>
								<div class="orange-line"></div>
								<div class="image-container">
									<img src="assets/img/socialmedia.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 descriptions-parent">
						<div class="descriptions-container" id="initial-description">
							<p class="description">
								<?php echo P1_C01_T01_HOME; ?>
							</p>
						</div>

						<div class="descriptions-container" id="description1">
							<p class="description">
								<?php echo P1_C02_T02_HOME; ?>
							</p>
						</div>
						<div class="descriptions-container" id="description2">
							<p class="description">
								<?php echo P1_C03_T03_HOME; ?>
							</p>
						</div>
						<div class="descriptions-container" id="description3">
							<p class="description">
								<?php echo P1_C04_T04_HOME; ?>
							</p>
						</div>
						<div class="descriptions-container" id="description4">
							<p class="description">
								<?php echo P1_C05_T05_HOME; ?>
							</p>
						</div>
					</div>
					<div class="col-sm-2 col-sm-offset-5 s2-btn-container m-bottom50">
						<a href="services.php<?php echo $nextLan; ?>"><button class="btn btn-default index-vermas"><?php echo P1_BTN_MORE_HOME; ?></button></a>
					</div>
				</div>
		</section><!--/Segunda sección-->

		<section class="top-c-title">
			<div class="col-md-12">
				<div class="row">
					<h2 class="sct">
						<span class="sct1"><?php echo P2_T00_ORANGE_HOME; ?></span>
						<span class="sct2"><?php echo P2_T01_ORANGE_HOME; ?></span>
					</h2>
				</div>
			</div>
		</section>


		<section class="top-nuevo" id="top-c">

		<div class="col-md-12">
			<div class="row">
				<div class="col-sm-5 tnue-left">
					<div class="tnuevo-container">
						<div class="tnc-img-container tv-effect"><img src="assets/img/tnc1.png" alt=""></div>
						<h2 class="tnc-title bench"><?php echo P2_BENCH_HOME; ?></h2>
						<div class="orange-line"></div>
						<p class="tnc-description">
							<?php echo P2_BENCH_TEXT_HOME; ?>
						</p>
						<div class="tnc-link-container">
							<a href="about.php<?php echo $nextLan; ?>" class="tnc-link">
								<?php echo P2_BENCH_LINK_HOME; ?>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
					<div class="tnuevo-container">
						<div class="tnc-img-container box-effect"><img src="assets/img/tnc2.png" alt=""></div>
						<h2 class="tnc-title"><?php echo P2_CLI_HOME; ?></h2>
						<div class="orange-line"></div>
						<p class="tnc-description">
							<?php echo P2_CLI_TEXT_HOME; ?>
						</p>
						<div class="tnc-link-container">
							<a href="services.php<?php echo $nextLan; ?>" class="tnc-link">
								<?php echo P2_CLI_LINK_HOME; ?>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-5 col-sm-offset-2 tnue-right">
					<div class="tnuevo-container">
						<div class="tnc-img-container cafeina-effect"><img src="assets/img/tnc3.png" alt=""></div>
						<h2 class="tnc-title"><?php echo P2_COFFEY_HOME; ?></h2>
						<div class="orange-line"></div>
						<p class="tnc-description">
							<?php echo P2_COFFEY_TEXT_HOME; ?>
						</p>
						<div class="tnc-link-container">
							<a href="portfolio.php<?php echo $nextLan; ?>" class="tnc-link">
								<?php echo P2_COFFEY_LINK_HOME; ?>
								<i class="fa fa-arrow-right"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		</section>


		<div class="top-c"><!--Tercera sección-->
			<div class="tit-top-c">
				<div class="dir-cont">
					<p><span class="tit3"><?php echo P3_T00_HOME; ?></span><span class="tit4 tc-t2"><?php echo P3_T01_HOME; ?></span></p>
				</div>
			</div>
			<div>
				<?php
					echo "
						<img src='assets/img/".$bomba_lang.".png' alt='' id='bomb-img'>
					";
				?>
			</div>
		</div>

		<?php include("structure/footer.php") ?>

		</div><!--/Inicia el contenido de toda la página-->
		<script src="assets/js/script.js"></script>
		<script>//Funciones llamadas en esta página
			$(document).ready(function(){
				$(".tnue-right").css("height",$(".tnue-left").height()+"px");
				if(parseInt($(window).width()) < 767) { $(".tnue-right").css("height","auto"); }
				if(parseInt($(window).width()) < 931) {
					$(".cuadro-contenedor").attr("class","col-xs-6 cuadro-contenedor")
					$(".outer-cuadro").height($(".outer-cuadro").height()+$(".outer-cuadro .image-container").height()+"px");
				}
				else {
				$(".outer-cuadro").height($(".outer-cuadro").height()+$(".outer-cuadro .image-container").height()+"px");
					$(".cuadro-contenedor").attr("class","col-xs-3 cuadro-contenedor");
				}
			});
			$(window).resize(function(){
				$(".outer-cuadro").height("auto");
				if(parseInt($(window).width()) < 931) {
					$(".cuadro-contenedor").attr("class","col-xs-6 cuadro-contenedor");
					$(".outer-cuadro").height($(".outer-cuadro").height()+$(".outer-cuadro .image-container").height()+"px");
				}
				else {

				$(".outer-cuadro").height($(".outer-cuadro").height()+$(".outer-cuadro .image-container").height()+"px");
					$(".cuadro-contenedor").attr("class","col-xs-3 cuadro-contenedor");
				}
				$(".tnue-right").css("height",$(".tnue-left").height()+"px");
				if(parseInt($(window).width()) < 767) { $(".tnue-right").css("height","auto"); }
			});
			$(".outer-cuadro").click(function(){
				var numCuadro = $(this).attr("id").substr($(this).attr("id").length - 1);
				if($(this).parent().parent().attr("class") != "row s2-cuadros-container already") {
					$(this).parent().parent().attr("class","row s2-cuadros-container already");
					$("#initial-description").fadeOut('400',function() {
						$("#description"+numCuadro).fadeIn('400', function() {});
						$("#description"+numCuadro).addClass("active");
					});
				}
				if($(this).attr("class") == "outer-cuadro active"){ return; };
				$(".descriptions-parent .descriptions-container.active").fadeOut('400', function() {
					$(".descriptions-parent .descriptions-container.active").attr("class","descriptions-container");
					$("#description"+numCuadro).fadeIn('400', function() {});
					$("#description"+numCuadro).addClass("active");
				});
				$(this).parent().parent().find(".outer-cuadro.active").attr("class","outer-cuadro");
				$(this).addClass("active");
				if(parseInt($(window).width()) < 931) {
				$("html,body").animate({
					scrollTop:($(".descriptions-parent").offset().top-($(".outer-cuadro").height()))
				}, 500);
				}
			});
			popoverer();
					window.sr = ScrollReveal();

				sr.reveal('.objects-container img', {
					duration: 3000,
					reset: true,
					viewFactor: 0.2,
				});
				sr.reveal('.outer-cuadro .image-container', {
					duration: 1000,
					reset: true,
					viewFactor: 0.7,
				});
					sr.reveal('#bomb-img', {
					duration: 1000,
					scale: 1,
					reset: true,
					viewFactor: 0.6,
					});
				 sr.reveal('.tnuevo-container .tv-effect', {
					duration: 1000,
					reset: true,
					viewFactor: 0.3,
					}, 1);
				 sr.reveal('.tnuevo-container .box-effect', {
					duration: 1000,
					reset: true,
					viewFactor: 0.3,
					}, 1);
				 sr.reveal('.tnuevo-container .cafeina-effect', {
					duration: 1000,
					reset: true,
					viewFactor: 0.3,
					}, 1);
		</script>
		<script src="assets/js/js.js"></script>
	</body>
</html>
