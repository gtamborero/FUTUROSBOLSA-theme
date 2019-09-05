<?php get_header(); ?>

<?php $esPresencial = in_category( 'presencial' ); ?>

<!-- IMG HEADER -->
 <?php if (types_render_field("imagen-cabecera", array('raw' => 'true'))){ ?>
 <div class="width100 realsize" style="margin-bottom:-7px;  overflow:hidden;">
 <img src="<?php echo types_render_field("imagen-cabecera", array('raw' => 'true'));	?>" /></div>
 <?php }else{ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; overflow:hidden;"><img src="/wp-content/uploads/investigador1.jpg" /></div>
 <?php } ?>

<section class="content">

<!--<div class="bgcolored width100" style="height:10px;"></div>-->

<!-- INFO DE CABECERA -->
<div class="row">
    <div class="width100 floatleft medpadtop medpadbottom">
		<div class="medline underline floatleft width100 h1"><?php the_title(); ?>
		
		<?php if($esPresencial) { ?>
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/<?php echo types_render_field("formulario", array('raw' => 'true')); ?>"><div class="acceso textcenter floatright white medspaceleft medspaceleft width30 hideonmobile" style="font-size: 0.4em; margin-top:0.7%; line-height:2.5em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
			¡Reserva el curso!
			</div></a>
		<?php } ?>


		</div>
	</div>

		<div class="width100 floatleft medpadbottom">
			<!-- LEFT SIDE -->
			<div class="<?php if ( $esPresencial ){ ?>width65to100<?php }else{ ?>width100<?php } ?> floatleft">
				<div class="textjustify check">
					<!--<div class="colored2 h2 minpadbottom">Introducción</div>-->
					<div class="h6"><?php echo the_content(); ?></div>
				</div>

				<?php if (types_render_field("objetivo", array('raw' => 'true'))){ ?>
				<div class=" textjustify  check">
					<div class="colored2 h2 medpadtop minpadbottom">Objetivo</div>
				<div class="h6"><?php echo types_render_field("objetivo", array('raw' => 'true')); ?></div>
				</div>
				<?php }	?>

				<?php if (types_render_field("youtube", array('raw' => 'true'))) { ?>
				<div class=" floatleft medpadtop minpadbottom colored2 h2"><?php if (types_render_field("videotitulo", array('raw' => 'true'))) echo types_render_field("videotitulo", array('raw' => 'true')); ?></div>
				<div class="clearleft maxspacebottom floatleft width100 displayinline textcenter" style="background-color:#f9f8f6; ">
					<div class="width100 floatright video-container">
					<iframe src="<?php echo types_render_field("youtube", array('raw' => 'true')); ?>" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen">
					</iframe>
					</div>
                </div>
				<?php } ?>
				
				<script>
				  jQuery(function() {
					jQuery('a[href*="#"]:not([href="#"])').click(function() {
					  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = jQuery(this.hash);
						//rop slide -> target = target.length ? target : jQuery('.mcareasload');
						target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
						if (target.length) {
						  jQuery('html, body').animate({
							scrollTop: target.offset().top
						  }, 1000);
						  return false;
						}
					  }
					});
				  });
				</script>
				
				<?php if ( $esPresencial ){ ?>
				<div class="width100 textcenter medpadtop h4"><a href="#temario">Ver Temario<br />
				<?php }else{ ?>
				<div class="width100 textcenter h4"><a href="#temario">Comenzar curso<br />
				<?php } ?> 
				
				
				<img style="width:50px; margin-top:10px;" src="<?php echo get_template_directory_uri(); ?>/img/organizacion-flecha1.png"></a></div>


				<?php if (types_render_field("metodo", array('raw' => 'true'))){ ?>
				<div class=" textjustify floatleft check">
					<div class="colored2 h2 medpadtop minpadbottom">Contenido</div>

				<div class="h6"><?php echo types_render_field("metodo", array('raw' => 'true')); ?></div>
				</div>
				<?php }	?>

			</div>
			<!-- LEFT SIDE -->

			<!-- SIDEBAR -->
<?php if ( $esPresencial ){ ?>
			<div class="width30to95 floatright check medpadbottom">
				<div class="sidebartitle white h6" style="background-color:#444444;">Información</div>
				<div class="floatleft maxspacebottom" style="background-color:#f9f8f6; border:1px solid #dedede; width:99.5%;">
					<div class="medpad medpadtop medpadbottom">

							
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-certificado.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Requisitos</strong>
							<div class="h7"><?php echo types_render_field("requisitos", array('raw' => 'true')); ?></div>
							</div>

              <div class="width20 medpadtop floatleft"><img src="<?php echo get_template_directory_uri(); ?>/img/software.png" style="width:31px;" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Software</strong>
							<div class="h7"><?php echo types_render_field("software", array('raw' => 'true')); ?></div>
							</div>


							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-tutor.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Garantia de calidad</strong>
							<div class="h7">Más de 500 traders han confiado en nosotros durante los últimos 8 años</div>
							</div>

							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-online.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Contacto</strong>
							<div class="h7">Jesus Fernandez<br />639 36 41 40<br />info@futurosbolsa.com<br />Skype: <a href="skype:futurosbolsa?call">futurosbolsa</a></div>
							</div>


				
				<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/inscripcion"><div class="acceso h6 textcenter floatleft white medspaceleft medspaceleft width90 maxspacebottom maxspacetop maxline hideonpc " style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				¡Reserva el curso!
				</div></a>
				


					</div>
				</div>
			</div>
<?php } ?>
			<!-- FIN SIDEBAR -->


		</div>
	</div>
</div>

<!-- TIRA DE PUBLICIDAD CURSOS
<div class="bgcolored2 width100">
	<div class="row maxline">
		<div class="floatleft h4 minpadtop black">
		Iníciate en el trading ¡Prueba nuestro curso interactivo
		<strong>gratuito!</strong>
		</div>

		<div class="floatright" style="padding: 1.6% 0%">
			<a class="white" href="">
			<div class="button h4">¡Me apunto!</div>
			</a>
		</div>
	</div>
</div> -->

<!-- TEMARIO -->
<div class="bgcolored width100 medpadbottom">
<a name="temario">
	<div class="row">
		<div class="width100 floatleft medpadtop white">
			<div class="white h2 medpadtop minpadbottom underline ">Temario</div>
			<?php if (types_render_field("temario", array('raw' => 'true'))) echo types_render_field("temario", array('raw' => 'true')); ?>
		</div>
	</div>
</div>

</section><!--/.content-->

<?php get_footer(); ?>
