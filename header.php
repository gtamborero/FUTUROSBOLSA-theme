<?php
// CHAPU PARA REDIRIGIR A FB si no eres user
if (!is_user_logged_in()){
	header('Location: http://www.futurosbolsa.com/fb');
}
        header('Cache-Control: no-cache, no-store, must-revalidate'); // HTTP 1.1.
        header('Pragma: no-cache'); // HTTP 1.0.
        header('Expires: 0'); // Proxies.


// Vamos a tratar la cadena the_content para agregarle siempre al final el
// CSS que nos permite customizar la página para visitantes y estudiantes

// Añado filtro con prioridad 1 sobre el contenido (para estar delante del fitro de leardash)
add_filter( 'the_content', 'learndashcss', 1 );

function learndashcss( $content ) {
    if ( 1 ){
        // Add CSS at end of content
        $content = sprintf(
            '<!-- LOS VISITANTES NO VEN CONTENIDOS DEL CURSO -->
			[visitor]
			 <style>
			 #learndash_course_content {display:none;}
			.widget_ldcourseprogress, .widget_ldcoursenavigation {display:none;}
			 </style>
			[/visitor]

			<!-- LOS ESTUDIANTES NO VEN SIDEBAR DE VENTA DEL CURSO -->
			[student]
			 <style>
			.widget_text {display:none;}
			 </style>
			[/student] %s',
            $content
        );
    return $content;
	}
}

//envio mail cuando click sobre el boton de pago
add_filter('learndash_payment_button', function($button, $params) {

	$current_user = wp_get_current_user();
	$titulo ='[Futuros Bolsa] - Proceso de compra ' . $current_user->user_login;
	$correo='
Hola ' . $current_user->user_login . '!

Estás a punto de realizar el pago en el curso elegido.

Una vez hayas realizado el pago, tendrás acceso al curso desde el botón de la página principal <Acceso usuarios>.
Si tienes algún problema durante el proceso de compra puedes ponerte en contacto con nosotros en info@' . $_SERVER['SERVER_NAME'] . '

Gracias por confiar en Futuros Bolsa.

Jesús Fernandez
CEO - Futuros Bolsa
info@' . $_SERVER['SERVER_NAME'] . '
www.' . $_SERVER['SERVER_NAME'] . '
';

	wp_mail( "info@iproject.cat", $titulo, $correo );
	wp_mail( $current_user->user_email, $titulo, $correo );

return $button;
},5,2);


?><!DOCTYPE html>
<html class="no-js" lang="es-ES">

<head>
	<meta charset="UTF-8">
	<meta content="user-scalable=yes, maximum-scale=1.6, width=device-width, initial-scale=1, target-densitydpi=device-dpi" name="viewport">
	<title><?php wp_title(''); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="bglightgrey width100" style="height:16px;"></div>
<div id="wrapper">

	<header id="header">
                        <div class="row minpadtop"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>"><img src="/wp-content/uploads/escuela-de-bolsa-online.jpg" style="max-width:274px; width:60%;"></a>
							<div class="floatright width50 textright">
							<?php if ( is_user_logged_in() ) { ?>
							<div class="floatright maxline medspaceleft h6 "><a href="<?php echo wp_logout_url(); ?>" title="Logout">Salir</a></div><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/usuario"><div class="acceso textright floatright white h6 valigncenter minpadright" style="-webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px;"><img src="/wp-content/uploads/acceso-usuarios.png">&nbsp; Hola <?php global $current_user; echo $current_user->user_login; ?>&nbsp; </div></a>


                                                        <div class="floatright maxline medspaceleft h6 clearboth "><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/usuario">Mis Cursos</a>
                                                            &nbsp; &nbsp; &nbsp; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/cursos-trading/">Comprar</a>
                                                            &nbsp; &nbsp; &nbsp; <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/consulta-al-profesor/">Profesor</a>
                                                        </div>
                                                        <?php }else{ ?>
							<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/acceder"><div class="acceso textright floatright white h6 valigncenter minpadright" style="-webkit-border-radius: 15px; -moz-border-radius: 15px; border-radius: 15px;"><img src="/wp-content/uploads/acceso-usuarios.png">&nbsp; Acceso usuarios&nbsp;</div></a>
							<?php }	?>
							</div>
						</div>
<?php if ( !is_user_logged_in() ) { ?>
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
<?php } ?>

	</header><!--/#header-->

	<div class="container" id="page">
		<div class="">
			<div class="main">
				<div class="main-inner group">
