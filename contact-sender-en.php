<?php
	if( isset($_POST["nombre"]) && isset($_POST["correo"]) && isset($_POST["telefono"]) && isset($_POST["asunto"]) && isset($_POST["mensaje"]) ) {
		$name = $_POST["nombre"];
		$usr_mail = $_POST["correo"];
		$phone = $_POST["telefono"];
		$subject = $_POST["asunto"];
		$msg = $_POST["mensaje"];

		$subject_webmaster = "Recently someone has contacted you.";
		$subject_usr = "Thank you for your message!";

		$webmaster_mail = "info@fabricadesoluciones.com";
		$webmaster_mail_cc = "kreyes@fabricadesoluciones.com";

		$url="http://www.fabricadesoluciones.com/assets/css/";
		$body_msg_user =
		"
			<html>
			<head>
				<title>Thanks for contacting us.</title>
				<meta charset='utf-8'>
				<style>
					@import url('https://fonts.googleapis.com/css?family=Cookie|Open+Sans');
					@font-face {
						font-family: Cookie;
						src: url(".$url."font/Cookie/Cookie-Regular.ttf);
					}
					.cookie-font { font-family: 'Cookie', cursive; }
					.open-sans { font-family: 'Open Sans', sans-serif; }
					.arial { font-family: 'Arial', sans-serif; }

					body { margin: 0; }
					table {
						width: 100%;
						height: 100%;
					}
					.table-thanks {
						width: 100%;
						background-color: #F88E39;
						text-align: center;
						padding: 30px 15px;
					}
					.img-thanks { width: 100%; }
					.usr-name { font-size: 40px; }
					.thanks { font-size: 4.5vw; font-weight: 800; }
					.text-2 { font-size: 16px; }
					.text-3 { font-size: 3vw; }
					@media(max-width:990px) {
						.usr-name { font-size: 30px; }
						.thanks, .text-3 { font-size: 40px; }
					}
				</style>
			</head>
			<body>

				<table class='table-thanks'>
					<tbody>
						<tr>
						</tr>

						<tr>
							<td style='color: white;'>
								<div class='usr-name cookie-font'>¡Hello $name!</div>
								<div class='open-sans thanks'>THANKS</div>
								<div class='arial text-2'>for contacting to Fábrica de Soluciones RAK</div>
								<img class='img-thanks' src='http://www.fabricadesoluciones.com/assets/img/thanks/thanks-mail.png'>
								<div class='open-sans text-2'>
									We will contact you soon to resolve your doubts
								</div>
								<p></p>
								<div class='text-3 open-sans thanks'>¡HAVE A GOOD DAY!</div>
							</td>
						</tr>
					</tbody>
				</table>

			</body>
			</html>
		";

		$body_msg_webmaster =
		"
			<!DOCTYPE html>
			<html>
			<head>
				<title>Notification.</title>
			</head>
			<body>
				<p>
					The user <b>$name</b> contacted you
					from the webpage www.fabricadesoluciones.com.
				</p>
				<b>Message:</b>
				<p>\"$msg\"</p>
				<b>Contact data:</b>
				<p>
					<b>E-Mail:</b> $usr_mail<br>
					<b>Phone:</b> $phone
				</p>
			</body>
			</html>
		";

		$headers_usr = "MIME-Version: 1.0"."\r\n".
									 "Content-type: text/html; charset=utf-8"."\r\n".
									 "From: ".$webmaster_mail."\r\n".
									 "To: ".$usr_mail."\r\n".
									 "X-Mailer: PHP/".phpversion();

		$headers_webmaster = "MIME-Version: 1.0"."\r\n".
												 "Content-type: text/html; charset=utf-8"."\r\n".
												 "From: ".$usr_mail."\r\n".
												 "To: ".$webmaster_mail."\r\n".
												 "Cc: ".$webmaster_mail_cc."\r\n".
												 "X-Mailer: PHP/".phpversion();

		/*Mail to user*/
		$mail_usr = mail($usr_mail, $subject_usr, $body_msg_user, $headers_usr);

		/*Mail to webmaster*/
		$mail_webmaster = mail($webmaster_mail, $subject_webmaster, $body_msg_webmaster, $headers_webmaster);

		session_start();
		$_SESSION["thanks_page"]="ready";
		$response_var = array( "status" => "ready" );
		echo json_encode($response_var);
	} else {
		header("Location: contact.php?lang=en");
	}
?>