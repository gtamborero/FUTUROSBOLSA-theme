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
		<?php if ( !$esPresencial ){ ?>
			<?php if ( is_user_logged_in() ) { ?>
				<a href="<?php echo types_render_field("accesourl", array('raw' => 'true')); ?>"><div class="acceso textcenter floatright white medspaceleft medspaceleft width30 hideonmobile" style="font-size: 0.4em; margin-top:0.7%; line-height:2.5em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				  ¡<?php if ( get_the_ID() == 642): echo "Inscríbete gratis"; else: echo "Comprar"; endif; ?>!
				</div></a>
				<?php }else{ ?>
				<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/registro/"><div class="acceso textcenter floatright white maxline minspacetop medspaceleft medspaceleft width30 hideonmobile" style="font-size: 0.4em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				  ¡<?php if ( get_the_ID() == 642): echo "Inscríbete gratis"; else: echo "Comprar"; endif; ?>!
				</div></a>
			<?php } ?>
		<?php }else{ ?>
			<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/inscripcion"><div class="acceso textcenter floatright white medspaceleft medspaceleft width30 hideonmobile" style="font-size: 0.4em; margin-top:0.7%; line-height:2.5em; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
			¡Reserva el curso!
			</div></a>
		<?php } ?>

		</div>
	</div>

		<div class="width100 floatleft medpadbottom">
			<!-- LEFT SIDE -->
			<div class="width65to100 floatleft">
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


				<?php if (types_render_field("metodo", array('raw' => 'true'))){ ?>
				<div class=" textjustify floatleft check">
					<div class="colored2 h2 medpadtop minpadbottom">Método</div>

				<div class="h6"><?php echo types_render_field("metodo", array('raw' => 'true')); ?></div>
				</div>
				<?php }	?>

			</div>
			<!-- LEFT SIDE -->

			<!-- SIDEBAR -->

			<div class="width30to95 floatright check medpadbottom">
				<div class="sidebartitle white h6" style="background-color:#444444;">Información</div>
				<div class="floatleft maxspacebottom" style="background-color:#f9f8f6; border:1px solid #dedede; width:99.5%;">
					<div class="medpad medpadtop medpadbottom">
						<?php /* if (types_render_field("caracteristicas", array('raw' => 'true'))) echo types_render_field("caracteristicas", array('raw' => 'true')); */ ?>

							<?php if ( $esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-certificado.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Requisitos</strong>
							<div class="h7"><?php echo types_render_field("requisitos", array('raw' => 'true')); ?></div>
							</div>

              <div class="width20 medpadtop floatleft"><img src="<?php echo get_template_directory_uri(); ?>/img/software.png" style="width:31px;" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Software</strong>
							<div class="h7"><?php echo types_render_field("software", array('raw' => 'true')); ?></div>
							</div>
							<?php } ?>

							<?php if ( !$esPresencial ){ ?>
							<div class="width20 floatleft"><img src="/wp-content/uploads/icono-curso-certificado.jpg" alt="" /></div>
							<div class="width80 floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Certificación acreditativa</strong>
							<div class="h7">Recibirás un diploma acreditativo</div>
							</div>
							<?php } ?>

							<?php if ( $esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-tutor.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Garantia de calidad</strong>
							<div class="h7">Más de 500 traders han confiado en nosotros durante los últimos 8 años</div>
							</div>
							<?php } ?>

							<?php if ( !$esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-duracion.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Duración:
							<?php  if (types_render_field("duracion", array('raw' => 'true'))) echo types_render_field("duracion", array('raw' => 'true'));  ?> </strong><strong>h</strong>
							<div class="h7">&nbsp;<?php if ( !$esPresencial ){ ?>Tendrás 3 meses para completarlo<?php } ?></div>
							</div>
							<?php } ?>

							<?php if ( $esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-online.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Contacto</strong>
							<div class="h7">Jesus Fernandez<br />639 36 41 40<br />info@<?php echo $_SERVER['SERVER_NAME']; ?> </div>
							</div>
							<?php } ?>

							<?php if ( !$esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-tutor.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Tutor personalizado</strong>
							<div class="h7">¡Resuelve tus dudas! Pregunta al profesor cuando quieras y te contestará en máx. 24/48h</div>
							</div>

							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-online.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Webinar</strong>
							<div class="h7">Videoconferencia mensual de profundización. Podrás preguntar vía chat al profesor. </div>
							</div>
							<?php } ?>


							<?php if ( !$esPresencial ){ ?>
							<div class="width20 medpadtop floatleft"><img src="/wp-content/uploads/icono-curso-compra-segura.jpg" alt="" /></div>
							<div class="width80 medpadtop floatleft h6 medpadbottom underline"><strong style="text-transform: uppercase;">Compra segura TPV / Paypal</strong>
							<div class="h7">Usamos certificado de garantía SSL</div>
							</div>
							<?php } ?>


						<div class="width20 medpadtop floatleft">
						<img src="/wp-content/uploads/dolar.png">
						</div>
						<div class="width80 medpadtop floatleft h4 medpadbottom ">
						<strong>Precio:</strong>
							<div class="h7">

								<?php if ( !$esPresencial ){
                                                                //Obtengo post ID de learndash relacionado con el post actual por URL
                                                                $postid = url_to_postid( types_render_field("accesourl", array('raw' => 'true')) );
                                                                //Obtengo array que contiene el precio del curso
                                                                $arrayPrice = get_post_meta( $postid, "_sfwd-courses", true );
                                                                $importe = $arrayPrice["sfwd-courses_course_price"];

																if ($importe == 0): echo "<div class='red h5'>Gratis</div>"; else: echo "<div class='red h5'>" . $importe . '€</div>'; endif;
								}else{
																echo "<div class='red h5'>" . types_render_field("precio-presencial", array('raw' => 'true')) . "</div>";
								}?>
							</div>
						</div>
				<?php if ( !$esPresencial ){ ?>
					<?php if ( is_user_logged_in() ) { ?>
						<a href="<?php echo types_render_field("accesourl", array('raw' => 'true')); ?>"><div class="acceso h6 textcenter floatleft white medspaceleft medspaceleft width90 maxspacebottom maxspacetop maxline hideonpc " style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
						  ¡<?php if ( get_the_ID() == 642): echo "Inscríbete gratis"; else: echo "Comprar"; endif; ?>!
						</div></a>
						<?php }else{ ?>
						<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/registro/"><div class="acceso h6 textcenter floatleft white medspaceleft medspaceleft width90 maxspacebottom maxspacetop maxline hideonpc" style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
						  ¡<?php if ( get_the_ID() == 642): echo "Inscríbete gratis"; else: echo "Comprar"; endif; ?>!
						</div></a>
					<?php } ?>
				<?php }else{ ?>
				<a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/inscripcion"><div class="acceso h6 textcenter floatleft white medspaceleft medspaceleft width90 maxspacebottom maxspacetop maxline hideonpc " style="-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;">
				¡Reserva el curso!
				</div></a>
				<?php } ?>


					</div>
				</div>
			</div>
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
	<div class="row">
		<div class="width100 floatleft medpadtop white">
			<div class="white h2 medpadtop minpadbottom underline ">Temario</div>
			<?php if (types_render_field("temario", array('raw' => 'true'))) echo types_render_field("temario", array('raw' => 'true')); ?>
		</div>
	</div>
</div>

</section><!--/.content-->

<?php get_footer(); ?>
