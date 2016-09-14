<?php
/*
Template Name: Metodo
*/
?><?php get_header(); ?>

<!-- IMG HEADER -->
 <?php if (types_render_field("imagen-cabecera", array('raw' => 'true'))){ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;">
 <img src="<?php echo types_render_field("imagen-cabecera", array('raw' => 'true'));	?>" /></div>
 <?php }else{ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;"><img src="/wp-content/uploads/learning-system.jpg" /></div>
 <?php } ?>

<section class="content">

<!--<div class="bgcolored width100" style="height:10px;"></div>-->

<!-- INFO DE CABECERA -->
<div class="row">
    <div class="width100 floatleft maxpadtop medpadbottom">
		<!--<div class="h1 medline underline"><?php the_title(); ?>
			</div>
		</div>-->

		<div class="width96 floatleft minpad medpadbottom">
			<div class="colored center h3">En nuestro video en 1 minuto te explicamos:</div>
			<!-- VIDEO -->
			<div class="width50to100 minpadtop floatleft">
                            <div class="width100 floatright video-container">
                          <iframe src="https://player.vimeo.com/video/137833048" style="width:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                            </div>	
			</div>
			<!-- FIN VIDEO -->
		
			<!-- TEXTO LATERAL -->
			<div class="width45to90 floatright medpadtop" style="overflow:visible;">
				<div class="width100 floatleft">

					<div class="darkgrey h6">
					<ul class="ulsimbol">
					<li>Regístrate en la escuela
					<li>Visualiza los videos de cada tema
					<li>Descarga el material complementario
					<li>Resuelve los cuestionarios
					<li>Al final del curso: Asiste a nuestro webinar
					<li>Resuelve tus dudas consultando al profesor
					</ul>
					</div>
					
				</div>
			</div>
			<!-- FIN VIDEO -->
		
		</div>
	</div>	
</div>

<div class="width100 bgcolored medpadbottom">
    <div class="row maxpadtop">
       <div class="width100 floatleft medpadbottom">
			<div class="width45 minpad textcenter white floatleft">
				<img src="/wp-content/uploads/icono-interactivo.png">
				<div class="width100 h4 medpadbottom">Interactivo</div>
				<div class="width100">Realizamos Webinars mensuales para profundizar tus conocimientos. Comunícate fácilmente con el profesor desde el apartado "Consultas".</div>
			</div>
			<div class="width45 minpad textcenter white floatleft">
				<img src="/wp-content/uploads/icono-seguimiento.png">
				<div class="width100 h4 medpadbottom">Seguimiento</div>
				<div class="width100">Después de cada tema, el alumno debe completar un test conceptual para demostrar su aprendizaje.</div>
			</div>
			<div class="width45 minpad textcenter white floatleft maxpadtop clearboth">
				<img src="/wp-content/uploads/icono-temario.png">
				<div class="width100 h4 medpadbottom">Material de apoyo</div>
				<div class="width100">Además de los videos explicativos, el alumno tendrá acceso a una biblioteca de trading donde podrá leer artículos de calidad seleccionados por el profesor.</div>
			</div>
			<div class="width45 minpad textcenter white floatleft maxpadtop">
				<img src="/wp-content/uploads/icono-certificado.png">
				<div class="width100 h4 medpadbottom">Acceso al mercado</div>
				<div class="width100">Los alumnos avanzados tienen la ayuda de los profesores en su entrada real en el mercado. 
				Los profesores revisarán tus estrategias y te aconsejarán de forma individual.</div>
			</div>
		</div>

    </div>
</div>

<div class="width100 bglightgrey medpadbottom">
    <div class="row maxpadtop">

    <center><h1 style="font-weight:normal; margin-bottom:20px; font-size: 40px;">Contáctanos </h1>
    <p class="textcenter">Si desea hacer alguna consulta
        déjenos sus datos y nos pondremos en contacto.<br /><br /> </p>
    </center>

	<div style="width:70%; margin-left:15%;">
	<?php echo do_shortcode("[contact-form-7 id=8 title='Formulario de contacto 1']"); ?>
	</div>

	
	
	</div>
</div>

<?php get_footer(); ?>