<?php
/*
Template Name: Inscripcion
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

    <center><h1 style="font-weight:normal; margin-bottom:20px; font-size: 40px;">Formulario de inscripción</h1>
    <p class="textcenter">Puedes mandarnos la solicitud de pre-inscripción a través del siguiente formulario. No te compromete a nada, solo recibirás la información.<br /><br />
	</p>
    </center>

	<div style="width:70%; margin-left:15%;">
	<?php echo do_shortcode("[contact-form-7 id='8' title='Inscripcion']"); ?>
	</div>

	<br />&nbsp;<br />
	Escuela de bolsa Online. Paseo de Gracia 12<br />
(08007 Barcelona) España. NIF: 37732952A	</center>

	
	</div>
</div>

<?php get_footer(); ?>