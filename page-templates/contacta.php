<?php
/*
Template Name: Contacta
*/
?><?php get_header(); ?>

<!-- IMG HEADER -->
 <?php if (types_render_field("imagen-cabecera", array('raw' => 'true'))){ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;">
 <img src="<?php echo types_render_field("imagen-cabecera", array('raw' => 'true'));	?>" /></div>
 <?php }else{ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;"><img src="/wp-content/uploads/investigador1.jpg" /></div>
 <?php } ?>

<section class="content">
<!-- INFO DE CABECERA -->
<div class="row">
    <div class="width100 floatleft">
		<!--<div class="h1 medline underline"><?php the_title(); ?>
			</div>
		</div>-->

		
	</div>	
</div>


<div class="width100 bglightgrey medpadbottom">
    <div class="row medpadtop">

    <center><h1 style="font-weight:normal; margin-bottom:20px; font-size: 40px;">Contáctanos </h1>
    <p class="textcenter">Si deseas hacer alguna consulta
        déjanos tus datos y nos pondremos en contacto.<br /><br />
	</p>
    </center>

	<div style="width:70%; margin-left:15%;">
	<?php echo do_shortcode('[contact-form-7 id="1616" title="Formulario de contacto"]'); ?>
	</div>

	<br /><br />
	Escuela de bolsa Online. Paseo de Gracia 12, 1º<br />
(08007 Barcelona) España. NIF: 37732952A<br />
 <a href="mailto:info@<?php echo $_SERVER['SERVER_NAME']; ?>">info@<?php echo $_SERVER['SERVER_NAME']; ?></a> <br />Telf: 639 36 41 40	</center>

	
	</div>
</div>

<?php get_footer(); ?>