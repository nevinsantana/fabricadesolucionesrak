<?php
	/*$name = $_POST["nombre"];
	$usr_mail = $_POST["correo"];
	$phone = $_POST["telefono"];
	$subject = $_POST["asunto"];
	$msg = $_POST["mensaje"];*/

	$name = "Ivan Ramírez";
	$usr_mail = "ivan_amigue@hotmail.com";
	$phone = "5518168896";
	$subject_webmaster = "Duda";
	$msg = "Mensaje sobre duda";
	$subject_usr = "Gracias por contactar a Fabrica de Soluciones RAK."

	$webmaster_mail = "iramirez@fabricadesoluciones.com";

	$body_msg_user = 
	"
		<html>
		<head>
			<title>Gracias por contactarnos.</title>
		</head>
		<body>
			<p>Hola <b>$name</b></p>
			<p>Gracias por contactar a Fabrica de Soluciones RAK.</p>
			<p>Pronto nos pondremos en contacto contigo para resolver tus dudas.</p>
			<p>Buen día.</p>
		</body>
		</html>
	";

	$body_msg_webmaster =
	"
		<!DOCTYPE html>
		<html>
		<head>
			<title>Notificacion de contacto.</title>
		</head>
		<body>
			<p>El usuario <b>$name</b> se puso en contacto contigo.</p>
			<p>\"$msg\"</p>
		</body>
		</html>
	";

	$headers_usr = "From: ".$webmaster_mail."\r\n".
								 "Reply-To: ".$usr_mail."\r\n".
								 "X-Mailer: PHP/".phpversion();

	$headers_webmaster = "From: ".$usr_mail."\r\n".
								 "Reply-To: ".$webmaster_mail."\r\n".
								 "X-Mailer: PHP/".phpversion();

	/*Mail to user*/
	$mail_usr = mail($usr_mail, $subject_usr, $body_msg_user, $headers_usr);

	/*Mail to webmaster*/
	$mail_webmaster = mail($webmaster_mail, $subject_webmaster, $body_msg_webmaster, $headers_webmaster);
?>