<?php
	if( isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["telefono"]) && isset($_POST["asunto"]) && isset($_POST["mensaje"]) ) {
		$name = $_POST["nombre"];
		$usr_mail = $_POST["correo"];
		$phone = $_POST["telefono"];
		$subject = $_POST["asunto"];
		$msg = $_POST["mensaje"];

		// $subject_webmaster = "Recently someone has contacted you.";
		// $subject_usr = "Thanks for contact to Solutions Factory RAK.";

		// /*$webmaster_mail = "info@fabricadesoluciones.com";
		// $webmaster_mail_cc = "kreyes@fabricadesoluciones.com";*/
		// $webmaster_mail = "iramirez@fabricadesoluciones.com";
		// $webmaster_mail_cc = "nevsantana@fabricadesoluciones.com";

		// $body_msg_user =
		// "
		// 	<html>
		// 	<head>
		// 		<title>Thanks for contact us.</title>
		// 	</head>
		// 	<body>
		// 		<p>Hello <b>$name</b></p>
		// 		<p>Thanks for contact to Solutions Factory RAK.</p>
		// 		<p>Soon we will contact you to answer your questions.</p>
		// 		<p>Have a nice day.</p>
		// 	</body>
		// 	</html>
		// ";

		// $body_msg_webmaster =
		// "
		// 	<!DOCTYPE html>
		// 	<html>
		// 	<head>
		// 		<title>Notification.</title>
		// 	</head>
		// 	<body>
		// 		<p>The user <b>$name</b> contacted you..</p>
		// 		<b>Message:</b>
		// 		<p>\"$msg\"</p>
		// 		<b>Contact data:</b>
		// 		<p>
		// 			<b>E-Mail:</b> $usr_mail<br>
		// 			<b>Phone:</b> $phone
		// 		</p>
		// 	</body>
		// 	</html>
		// ";

		// $headers_usr = "MIME-Version: 1.0"."\r\n".
		// 							 "Content-type: text/html; charset=utf-8"."\r\n".
		// 							 "From: ".$webmaster_mail."\r\n".
		// 							 "To: ".$usr_mail."\r\n".
		// 							 "X-Mailer: PHP/".phpversion();

		// $headers_webmaster = "MIME-Version: 1.0"."\r\n".
		// 										 "Content-type: text/html; charset=utf-8"."\r\n".
		// 										 "From: ".$usr_mail."\r\n".
		// 										 "To: ".$webmaster_mail."\r\n".
		// 										 "Cc: ".$webmaster_mail_cc."\r\n".
		// 										 "X-Mailer: PHP/".phpversion();

		// /*Mail to user*/
		// $mail_usr = mail($usr_mail, $subject_usr, $body_msg_user, $headers_usr);

		// /*Mail to webmaster*/
		// $mail_webmaster = mail($webmaster_mail, $subject_webmaster, $body_msg_webmaster, $headers_webmaster);

		session_start();
		$_SESSION["thanks_page"]="ready";
		$response_var = array( "status" => "ready" );
		echo json_encode($response_var);
	} else {
		header("Location: contact.php?lang=en");
	}
?>