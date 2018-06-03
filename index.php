<?php
	// LOCALISATION
	define("LANG_RU", "ru");
	define("LANG_UA", "uk");
	define("LANG_EN", "en");
		define("LOC_RU", LANG_RU. "_RU");
		define("LOC_UA", LANG_UA . "_UA");
		define("LOC_EN", LANG_EN . "_US");

	$langLocale = LOC_RU;
	if (isset($_GET['lang'])) $langLocale = htmlspecialchars($_GET['lang'], ENT_QUOTES);
	switch ($langLocale) {
		case 'uk':
			$langLocale = LOC_UA;
			break;
		case 'ru':
			$langLocale = LOC_RU;
			break;
		case 'en':
			$langLocale = LOC_EN;
			break;
		default:
			$langLocale = LOC_RU;
			break;
	}


  setlocale(LC_ALL, $langLocale.".UTF-8");
  putenv("LC_ALL=$langLocale");
  bindtextdomain("messages", "locale");
    //bind_textdomain_codeset('messages', 'UTF-8');
	textdomain("messages");
?><!DOCTYPE html>
<html class="no-js" lang="ru"></html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Антон Бабинцев</title>
  <meta name="description" content="Дизайн &amp; веб-разработка: сайты, лендинги и вёрстка, вебдев и дизайн">
 
</head>
<body class='bg-grad'>

        <h1><?php echo _('Антон Бабинцев');?></h1>
        <h2><?php echo _('Дизайн & веб-разработка');?> </h2>
        <p>$langLocale = <?=$langLocale?></p>
  
 </body></html>