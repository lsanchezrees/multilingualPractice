<?php
$locale = filter_input(INPUT_GET, "locale", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
$supportedLocales = ["en_US", "es_MX"];

//set default in case of operator error
if(in_array($locale, $supportedLocales) === false){
	$locale = "en_US";
}

putenv("LANG=$locale");
setlocale(LC_ALL, $locale);

bindtextdomain("multilingual-practice", "locale");
bind_textdomain_codeset("multilingual-practice", "UTF-8");

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo _("A Site About Nothing"); ?></title>
	</head>
	<body>
		<h1><?php echo _("Ducks"); ?></h1>
		<p><?php echo _("I love ducks.  They are so cute."); ?></p>
	</body>
</html>
