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
		<title>Fabrica de Soluciones | Servicios</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.jkit.custom.1.2.16.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
		<script src="assets/js/js.js"></script>
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
									<li><a href="#" class="menu-sol active"><?php echo SERV_NAVBAR; ?></a></li>
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

							<div class="cookie-font oc-title oc-title-1">
								<?php echo PORTADA_TEXT_00_SERV; ?>
							</div>
							 <div class="party-one-font text-uppercase oc-title oc-title-2">
							 	<?php echo PORTADA_TEXT_01_SERV; ?>
							 </div>

							<div class="party-one-font oc-title-3 oc-title">
								<?php echo PORTADA_TEXT_02_SERV; ?>
							</div>
							<div class="normal-font oc-title-4 oc-title">
								<?php echo PORTADA_TEXT_03_SERV; ?>
							</div>

							<img src="assets/img/services/Slide01.png" alt="">

						</div>
					</div>
				</div>
			</section><!--/Primera sección-->
			<section class="top-b" id="top-b"><!--Segunda sección-->
				<div class="top-b-back tbb-nobackground"></div><!--Fondo fixed-->
				<div class="col-md-12 top-b-content services-topb"><!--Contenido top-b-->
					<div class="row row-nomargin">
						<div class="s-panel-text col-sm-8 col-sm-offset-2">
							<?php echo P1_TEXT_00; ?>
							<br><br>
							<?php echo P1_TEXT_01; ?>
						</div>
					</div>
					<div class="row s2-cuadros-container row-nomargin">
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
					<div class="row row-nomargin">
						<div class="col-md-8 col-md-offset-2 descriptions-parent">
							<div class="descriptions-container" id="initial-description">
								<p class="description">
									<br>
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
					</div>
			</section><!--/Segunda sección-->

		<section class="top-c-title">
			<div class="col-md-12">
				<div class="row">
					<h2 class="sct">
						<span class="sct1"><?php echo P2_T00_ORANGE_SERV; ?></span>
						<span class="sct2"><?php echo P2_T01_ORANGE_SERV; ?></span>
					</h2>
				</div>
			</div>
		</section>


		<section class="top-nuevo" id="top-c">

		<div class="row">
			<div class="col-sm-12 last-sec">
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="assets/img/services/valor1.png" alt="000">
						</div>
					</div>
					<h2 class="tnc-title bench"><?php echo P2_BENCH_HOME; ?></h2>
					<div class="orange-line"></div>

					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<p class="tnc-description tnc-center">
								<?php echo P2_BENCH_TEXT_HOME; ?>
							</p>
						</div>
					</div>
					</p>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="assets/img/services/valor3.png" alt="000">
						</div>
					</div>
					<h2 class="tnc-title"><?php echo P2_CLI_HOME; ?></h2>
					<div class="orange-line"></div>

					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<p class="tnc-description tnc-center">
								<?php echo P2_CLI_TEXT_HOME; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<img src="assets/img/services/valor2.png" alt="000">
						</div>
					</div>
					<h2 class="tnc-title"><?php echo P2_COFFEY_HOME; ?></h2>
					<div class="orange-line"></div>

					<div class="row">
						<div class="col-sm-10 col-sm-offset-1">
							<p class="tnc-description tnc-center">
								<?php echo P2_COFFEY_TEXT_HOME; ?>
							</p>
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
				 sr.reveal('.last-sec img', {
					duration: 1000,
					reset: true,
					viewFactor: 0.3,
					}, 1);
		</script>
	</body>
</html>
