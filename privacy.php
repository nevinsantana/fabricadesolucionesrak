<!DOCTYPE html>
<html lang="en">
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
									<li><a href="index.php<?php echo $nextLan; ?>" class="menu-sol"><?php echo HOME_NAVBAR; ?></a></li>
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

		<section class="top-c-title">
			<div class="col-md-12">
				<div class="row">
					<h2 class="sct privacy-title-orange">
						<span class="sct1"><?php echo TITPRINC_PRIVACY; ?></span>
					</h2>
				</div>
			</div>
		</section>


		<section class="top-nuevo" id="top-c">
			<div class="col-sm-8 col-sm-offset-2 privacy-text text-justify">
				<p><?php echo PHA1_PRIVACY; ?></p>
				<p>
					<strong><?php echo TITLE1_PRIVACY; ?></strong>
				</p>
				<p><?php echo PHA2_PRIVACY; ?></p>
				<p>
					<ul>
						<li><?php echo LIST1_PRIVACY; ?></li>
						<li><?php echo LIST2_PRIVACY; ?></li>
						<li><?php echo LIST3_PRIVACY; ?></li>
						<li><?php echo LIST4_PRIVACY; ?></li>
						<li><?php echo LIST5_PRIVACY; ?></li>
						<li><?php echo LIST6_PRIVACY; ?></li>
						<li><?php echo LIST7_PRIVACY; ?></li>
						<li><?php echo LIST8_PRIVACY; ?></li>
						<li><?php echo LIST9_PRIVACY; ?></li>
						<li><?php echo LIST10_PRIVACY; ?></li>
					</ul>
				</p>
				<p>
					<strong><?php echo TITLE2_PRIVACY; ?></strong>
				</p>
				<p><?php echo PHA3_PRIVACY; ?></p>
				<p>
					<ul>
						<li><?php echo LIST11_PRIVACY; ?></li>
						<li><?php echo LIST12_PRIVACY; ?></li>
						<li><?php echo LIST13_PRIVACY; ?></li>
						<li><?php echo LIST14_PRIVACY; ?></li>
						<li><?php echo LIST15_PRIVACY; ?></li>
						<li><?php echo LIST16_PRIVACY; ?></li>
						<li><?php echo LIST17_PRIVACY; ?></li>
						<li><?php echo LIST18_PRIVACY; ?></li>
					</ul>
				</p>
				<p>
					<strong><?php echo TITLE3_PRIVACY; ?></strong>
				</p>
				<p><?php echo PHA4_PRIVACY; ?></p>
				<p><?php echo PHA5_PRIVACY; ?></p>
				<p>
					<strong><?php echo TITLE4_PRIVACY; ?></strong>
				</p>
				<p><?php echo PHA6_PRIVACY; ?></p>
				<p><?php echo PHA7_PRIVACY; ?></p>
				<p><?php echo PHA8_PRIVACY; ?> <a class="p-href" href="mailto:contacto@fabricadesoluciones.com">contacto@fabricadesoluciones.com</a></p>
				<p><?php echo PHA9_PRIVACY; ?></p>
				<p>
					<strong><?php echo TITLE5_PRIVACY; ?></strong>
				</p>
				<p>
				 <?php echo PHA10_PRIVACY; ?> <a class="p-href" href="www.fabricadesoluciones.com">www.fabricadesoluciones.com</a></p>
				<p><?php echo PHA11_PRIVACY; ?></p>
			</div>
		</section>

		<?php include("structure/footer.php") ?>

		</div><!--/Inicia el contenido de toda la página-->
		<script src="assets/js/script.js"></script>
		<script src="assets/js/js.js"></script>
	</body>
</html>