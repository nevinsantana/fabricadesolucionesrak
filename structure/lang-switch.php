<?php
	ini_set('display_errors', 'Off');
	if( isset($_GET["lang"]) ) {
		$lang = $_GET["lang"];
		if( $lang!="es" && $lang!="en" ) {
			$href = $_SERVER["REQUEST_URI"];
			$href_splitted = explode("/", explode("?",$href)[0] )[2];
			echo "<script> window.location='".$href_splitted."?lang=es'; </script>";
		}
	} else
		$lang = "es";

	switch($lang) {
		case "es":
			include("lang/lang-es.php");
			$bomba_lang = "tcbomb-es";
			$nextLan = "?lang=es";
			$antilang = "en";
			break;
		case "en":
			include("lang/lang-en-us.php");
			$bomba_lang = "tcbomb-en";
			$nextLan = "?lang=en";
			$antilang = "es";
			break;
	}
?>