<?php global $pageTitle;
global $pageDescription;
$siteName = 'FreeSender';
$fullUrl = '//'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$currPage = array_shift(explode('?', $_SERVER['REQUEST_URI']));
$siteTitle = (!$pageTitle) ? $siteName : $pageTitle.' '.$siteName;
//print_r($currPage);
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui">
	<!-- Favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/android-chrome-512x512.png">
	<link rel="mask-icon" href="/assets/images/favicons/safari-pinned-tab.svg" color="#34ee00">
	<link rel="icon" type="image/png" href="/assets/images/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#7424f4">
	<meta name="theme-color" content="#7424f4">
	<!--share social-->
	<meta name="title" content="<?php echo $siteTitle; ?>">
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?php echo $siteTitle; ?>">
	<meta property="og:description" content="<?php echo $pageDescription; ?>">
	<meta property="og:url" content="<?php echo $fullUrl; ?>">
	<meta property="og:locale" content="ru_RU">
	<title><?php echo $siteTitle; ?></title>
	<!-- Common CSS-->
	<link href="/assets/styles/common.css?v=<?php echo filemtime('../assets/styles/common.css'); ?>" rel="stylesheet">
</head>
<body>
	<header class="header">
		<div class="wrap">
			<a class="header-logo" href="/">
				<img src="assets/images/logo.svg" alt="freesender logo">
			</a>
			<nav class="nav">
				<ul class="nav-list">
					<li class="nav-list__item active"><a href="/">О программе</a>
					</li>
					<li class="nav-list__item"><a href="whatsapp.html">WhatsApp Рассылки</a>
					</li>
					<li class="nav-list__item"><a href="sms.html">SMS Рассылки</a>
					</li>
					<li class="nav-list__item"><a href="#">Wiki</a>
					</li>
					<li class="nav-list__item"><a href="support.html">Поддержка</a>
					</li>
					<li class="nav-list__item"><a href="partners.html">Партнерам</a>
					</li>
				</ul>
			</nav>
			<div class="header__button popopen">
				<p>Войти</p>
			</div>
			<div class="header-gamburger">
				<div class="header-gamburger__item"></div>
				<div class="header-gamburger__item"></div>
				<div class="header-gamburger__item"></div>
			</div>
		</div>
	</header>
