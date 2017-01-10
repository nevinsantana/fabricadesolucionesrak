<?php
	if( isset($_GET["lang"]) ) {
		$lang = $_GET["lang"];
		if( $lang!="es" && $lang!="en" ){
			if( isset($antilang) )
				 $lang = $antilang;
			else
				$lang = "es";
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