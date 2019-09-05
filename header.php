<!DOCTYPE html>
<html class="no-js" lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta content="user-scalable=yes, maximum-scale=1.6, width=device-width, initial-scale=1, target-densitydpi=device-dpi" name="viewport">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google AdWords: 1070860627 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1070860627"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-1070860627');
</script>

</head>

<body <?php body_class(); ?>>

<div class="bglightgrey width100" style="height:16px;"></div>
<div id="wrapper">

	<header id="header">
                        <div class="row minpadtop"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>"><img src="/wp-content/uploads/escuela-de-bolsa-online.jpg" style="max-width:274px; width:60%;"></a>
						</div>

<!-- TOPBAR -->
		<?php if ( has_nav_menu('topbar') ): ?>
			<nav class="nav-container group" id="nav-topbar">
				<div class="nav-toggle"><i class="fa fa-bars"></i></div>
				<div class="nav-text"><!-- put your mobile menu text here --></div>
				<div class="nav-wrap container row textright clearboth"><?php wp_nav_menu(array('theme_location'=>'topbar','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
			</nav><!--/#nav-topbar-->
		<?php endif; ?>

<!-- HEADER BAR -->
		<?php if ( has_nav_menu('header') ): ?>
			<nav class="nav-container group" id="nav-header">
									<div class="">
										<div class="row">
											<div class="nav-toggle"><i class="fa fa-bars"></i></div>
											<div class="nav-text"><!-- put your mobile menu text here --></div>
											<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>
										</div>
								</nav><!--/#nav-header-->
									</div>
		<?php endif; ?>


	</header><!--/#header-->

	<div class="container" id="page">
		<div class="">
			<div class="main">
				<div class="main-inner group">
