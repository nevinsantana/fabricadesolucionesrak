<!doctype html>
<html>
	<head>
		<?php
			if( isset($_GET["lang"]) )
				$lang = $_GET["lang"];
			else
				$lang = "es";
			if($lang == "es") {
				$nextLan = "?lang=es";
				$antilang = "en";
			}
			else {
				$nextLan = "";
				$antilang = "es";
			}
			switch($lang) {
				case "es":
					include("lang/lang-es.php");
					break;
				case "en":
					include("lang/lang-en-us.php");
					break;
			}
		?>
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
		<title>RAK | Servicios</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
		</script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="assets/js/jquery.jkit.custom.1.2.16.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>
		<script src="https://unpkg.com/scrollreveal@3.3.2/dist/scrollreveal.min.js"></script>
		<script src="assets/js/js.js"></script>

		<!-- Google reCaptcha -->
		<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>&onload=renderCaptcha&render=explicit" async="async" defer="defer"></script>
		<script>
			var recaptcha;
			var renderCaptcha = function() {
				recaptcha = grecaptcha.render('recaptcha', {
					'sitekey': '6LebbwsUAAAAABC6h8tcsqOe4dDdIaIoIJQVDoL2',
					'theme': 'light'
				});
			};
		</script>
		<!-- Google reCaptcha -->
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
								<a class="navbar-brand" href="index.php">
									<img src="assets/img/topa-menu-logo.svg" alt="Logo RAK">
								</a>
							</div>
							<div class="collapse navbar-collapse navbar-right"
							id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
								<li><a href="?lang=<?php echo $antilang; ?>" class="menu-sol"><?php echo LANG_NAVBAR; ?></a></li>
									<li><a href="index.php" class="menu-sol"><?php echo HOME_NAVBAR; ?></a></li>
									<li><a href="services.php" class="menu-sol"><?php echo SERV_NAVBAR; ?></a></li>
									<li><a href="portfolio.php" class="menu-sol"><?php echo PORTF_NAVBAR; ?></a></li>
									<li><a href="about.php" class="menu-sol"><?php echo ABOUT_NAVBAR; ?></a></li>
									<li>
										<a href="#" class="menu-sol a-contactanos-menu active">
											<p class="menucontactanos-topa"><?php echo CONTACT_NAVBAR; ?></p>
										</a>
									</li>
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
			<section class="top-a top-a-contact" id="top-a"><!--Primera sección-->
				<div class="top-a-0"></div><!--Capa naranja-->
				<div class="top-a-2"><!--Capa título top-a-->
					<header class="menu-header"></header>
					<div class="party-one-font s-title"> <?php echo PORTADA_TEXT_CONTACT; ?> </div>
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


			<div class="portimg-container">
				<!-- Telephone -->
				<div class="telephone-img">
					<img src="assets/img/contact/contacto-phone.png" alt="Telephone">
				</div>
				<!-- Telephone -->

				<!-- Cloud 01 -->
				<div class="cloud-01">
					<img src="assets/img/contact/contacto-cloud.png" alt="Cloud01">
				</div>
				<!-- Cloud 01 -->

				<!-- Cloud 02 -->
				<div class="cloud-02">
					<img src="assets/img/contact/contacto-cloud.png" alt="Cloud02">
				</div>
				<!-- Cloud 02 -->
			</div>

			<section class="top-b tb-contact" id="top-b"><!--Segunda sección-->
				<div class="top-b-back tbb-nobackground"></div><!--Fondo fixed-->
				<div class="col-md-12 top-b-content"><!--Contenido top-b-->
					<div class="row">
						<div class="cookie-font contact-title">
							<?php echo P1_TITLE_CONTACT; ?>
						</div>
					</div>

					<div class="row text-center">
						<form>
							<div class="col-sm-12">
								<div id="my-alert" class="alert alert-dismissible alert-custom" role="alert">
									<button id="dismiss-my-alert" type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<span id="alert-text"></span>
								</div>
							</div>
							<div class="form-group col-sm-12">
								<input id="nombre" type="text" class="rak-contact" name="nombre" placeholder="<?php echo NAME_FRM_CONTACT; ?>:">
							</div>
							<div class="form-group col-sm-12">
								<input id="correo" type="text" class="rak-contact" name="correo" placeholder="<?php echo MAIL_FRM_CONTACT; ?>:">
							</div>
							<div class="form-group col-sm-12">
								<input id="telefono" type="text" class="rak-contact" name="telefono" maxlength="14" placeholder="<?php echo PHONE_FRM_CONTACT; ?>">
							</div>
							<div class="form-group col-sm-12">
								<input id="asunto" type="text" class="rak-contact" name="asunto" placeholder="<?php echo SUBJECT_FRM_CONTACT; ?>:">
							</div>
							<div class="form-group col-sm-12">
								<textarea id="mensaje" name="mensaje" class="rak-contact rc-textarea" placeholder="<?php echo MESSAGE_FRM_CONTACT; ?>:" rows="5"></textarea>
							</div>

							<div class="form-group col-sm-12 recaptcha-group">
								<div id="recaptcha"></div>
							</div>

							<div class="btn-group text-center">
								<button id="btn-contact-submit" type="button" class="rak-frm-btn"><?php echo BTN_SUBMIT_FRM_CONTACT; ?></button>
							</div>
						</form>
					</div>
				</div>


				<section class="zona-c-title col-md-12 zct-contact">
					<div class="row">
						<div class="col-md-12 zona-c-tcontainer">
							<span class="zona-c-t1"><?php echo P2_T00_ORANGE_CONTACT; ?></span>
							<span class="zona-c-t2"><?php echo P2_T01_ORANGE_CONTACT; ?></span>
						</div>
					</div>
				</section>

				<div class="col-md-12 contacts-container">
					<div class="cust-container contact-info">
						<div class="row">
							<div class="col-xs-4 col-xs-custom text-center">
								<div class="ci-schedule">
									<?php echo SCHEDULE_00_CONTACT; ?>
								</div><br>


								<div class="ci-info pr-custom">
									<div class="row">
										<div class="col-xs-6 text-right orange-contact"><?php echo SCHEDULE_01_CONTACT; ?></div>
										<div class="col-xs-6 text-left">9 - 18 Hrs.</div>
									</div>

									<div class="row">
										<div class="col-xs-6 text-right orange-contact"><?php echo SCHEDULE_02_CONTACT; ?></div>
										<div class="col-xs-6 text-left"><?php echo SCHEDULE_03_CONTACT; ?></div>
									</div>
									<hr class="orange-bar">
								</div>
							</div>

							<div class="col-xs-4 col-xs-custom left-orange-bar right-orange-bar">
								<div class="ci-schedule text-center">
									<?php echo CONTACTS_00_CONTACT; ?>
								</div><br>
								<div class="text-center ci-info pl-custom">
									<p><span class="orange-contact"><?php echo CONTACTS_01_CONTACT; ?></span> +52 (55) 5016-1705 & 06</p>
									<p><span class="orange-contact"><?php echo CONTACTS_02_CONTACT; ?></span> 101</p>
									<p><span class="orange-contact"><?php echo CONTACTS_03_CONTACT; ?></span> 108</p>
									<p><span class="orange-contact"><?php echo CONTACTS_04_CONTACT; ?></span> 108</p>
									<p><span class="orange-contact"><?php echo CONTACTS_05_CONTACT; ?></span> 100</p>
									<p><span class="orange-contact">E-mail</span> info@fabricadesoluciones.com</p>
								</div>

								<hr class="orange-bar">
							</div>

							<div class="col-xs-4 col-xs-custom text-center ci-social">
								<div class="ci-schedule text-center">
									<?php echo SOCIAL_NETWORKS_CONTACT; ?>
								</div><br>

								<a href="https://www.facebook.com/FabricaDeSolucionesRak/?fref=ts"
								target="_blank">
									<span class="fa-stack fa-lg social-icon-foot">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
									</span>
								</a>

								<a href="https://twitter.com/fabricarak" target="_blank">
									<span class="fa-stack fa-lg social-icon-foot">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
									</span>
								</a>

								<a href="https://www.linkedin.com/company/2019418?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A2019418%2Cidx%3A3-1-3%2CtarId%3A1480464427766%2Ctas%3Afabrica%20de%20sol"
								target="_blank">
									<span class="fa-stack fa-lg social-icon-foot">
										<i class="fa fa-circle fa-stack-2x"></i>
										<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
									</span>
								</a>
							</div>
						</div>
					</div>
			</section><!--/Segunda sección-->

			<?php include("structure/footer.php") ?>
		</div><!--/Inicia el contenido de toda la página-->

		<script src="assets/js/script.js"></script>
		<script>
			$(document).ready(function() {
				$("#my-alert").hide();

				/*Capitalize name*/
				$("#nombre").change(function(e) {
					var str = $("#nombre").val();

					str = str.toLowerCase().replace(/^[\u00C0-\u1FFF\u2C00-\uD7FF\w]|\s[\u00C0-\u1FFF\u2C00-\uD7FF\w]/g, function(letter) {
						return letter.toUpperCase();
					});

					$(this).val(str);
				});
				/*Capitalize name*/

				/*E-Mail only*/
				$("#correo").change(function(e) {
					var is_email = validateEmail( $(this).val() );

					if( !is_email ) {
						$("#my-alert").addClass("alert-warning");
						$("#alert-text").text("Ingresa un correo válido.");
						$("#my-alert").fadeIn(500);
					} else {
						$("#my-alert").removeClass("alert-warning");
						$("#alert-text").text("");
						$("#my-alert").fadeOut(500);
					}
				});

				function validateEmail(email) {
					var email_pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,
							is_email = email_pattern.test(email);

					return is_email;
				}
				/*E-Mail only*/

				/*Numbers only*/
				$("#telefono").keypress(function(e) {
					key = e.keyCode || e.which;

					if( (key<=57 && key>=48) || key==8 || key==37 || key==39 || key==9
						|| key==46 )
						return true;
					else
						return false
				});

				$("#telefono").keyup(function(e) {
						$(e.target).val(function(index, val) {
						return val.replace(/\D/g, "").replace(/\B(?=(\d{2})+(?!\d)\.?)/g, "-");
					});
				});
				/*Numbers only*/

				$("#btn-contact-submit").click(function(e) {
					var recaptcha_response = grecaptcha.getResponse();
					if( recaptcha_response==0 ) { /*recaptcha verification not passed*/
						$("#my-alert").addClass("alert-warning");
						$("#alert-text").text("Verifica que eres humano en el recaptcha.");
						$("#my-alert").fadeIn(500);
					} else { /*recaptcha verification passed*/
						var nombre = $("#nombre").val();
						var correo = $("#correo").val();
						var telefono = $("#telefono").val();
						var asunto = $("#asunto").val();
						var mensaje = $("#mensaje").val();

						var is_email = validateEmail(correo);

						var form_data = "nombre="+nombre+"&correo="+correo+"&telefono="+telefono+"&asunto="+asunto+"&mensaje="+mensaje+"'";
						if( nombre=="" || correo=="" || telefono=="" || asunto=="" || mensaje=="" ) {
							$("#my-alert").addClass("alert-warning");
							$("#alert-text").text("Uno o varios campos están vacíos. Por favor llenalos.");
							$("#my-alert").fadeIn(500);
						} else if( !is_email ) { /*Validate email again*/
								$("#my-alert").addClass("alert-warning");
								$("#alert-text").text("Ingresa un correo válido.");
								$("#my-alert").fadeIn(500);
						} else { /*Everithing has been validated*/
							$.ajax({
								url: 'contact-sender.php',
								type: 'POST',
								data: form_data,
								success: function() {
									$("#nombre").val("");
									$("#correo").val("");
									$("#telefono").val("");
									$("#asunto").val("");
									$("#mensaje").val("");
									$("#my-alert").addClass("alert-success");
									$("#my-alert").fadeIn(500);
									$("#alert-text").text("Gracias por contactarnos.")
								}, /*ajax success*/
								error: function(jqXHR, textStatus, errorThrown) {
									/*Si hay algun error, se mostrará también en un alert*/
									$("#my-alert").addClass("alert-danger");
									$("#my-alert").fadeIn(500);
									if (jqXHR.status === 0) {
										$("#alert-text").text('Not connect: Verify Network');
									} else if (jqXHR.status == 404) {
										$("#alert-text").text('Requested page not found [404]');
									} else if (jqXHR.status == 500) {
										$("#alert-text").text('Internal Server Error [500]');
									} else if (textStatus === 'parsererror') {
										$("#alert-text").text('Requested JSON parse failed');
									} else if (textStatus === 'timeout') {
										$("#alert-text").text('Time out error');
									} else if (textStatus === 'abort') {
										$("#alert-text").text('Ajax request aborted');
									} else {
										$("#alert-text").text('Uncaught Error: ' + jqXHR.responseText);
									}
								} /*ajax error*/
							}); /*AJAX*/
						} /*IF ELSE*/
					}/*IF ELSE reCAPTCHA*/
				});


				$("#dismiss-my-alert").click(function(e) {
					$("#my-alert").fadeOut(500);
					$("#my-alert").removeClass("alert-success");
					$("#my-alert").removeClass("alert-danger");
					$("#my-alert").removeClass("alert-warning");
					$("#alert-text").text("");
				});


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

				window.sr = ScrollReveal();
				sr.reveal('.portimg-container img', {
					duration: 2000,
					reset: true,
					viewFactor: 0.2,
				});
		</script>
	</body>
</html>
