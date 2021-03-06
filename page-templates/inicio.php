<?php
/*
Template Name: Inicio
*/
?>
<?php get_header(); ?>

<?php /*layerslider(1);*/ layerslider(2);    ?>

<!--
<div class="bgcolored2 width100">
	<div class="row maxline">
		<div class="floatleft h4 minpadtop black">Iníciate en el trading ¡Prueba nuestro curso interactivo <strong>gratuito!</strong></div>
                <div class="floatright" style="padding: 1.6% 0%"><a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/introduccion-al-trading/" class="white"><div class="button h4">¡Me&nbsp;apunto!</div></a></div>
	</div>
</div>
-->

<!-- PRESENCIALES -->
<div class="width100 minpadtop">
    <div class="row darkgrey"><div class="maxline h3 minspace underline">FORMACIÓN PARA TRADERS</div></div>
</div>

<div class="width100 clearboth minpadtop">
    <div class="row textcenter">

<!-- HEAD PRODUCTOS ESTRELLA -->

            <?php query_posts( 'category_name=presencial'); ?>
			<?php /* query_posts( 'category_name=destacados&post_type=sfwd-courses'); */ ?>
            <?php if(have_posts()) : ?>

                 <?php while(have_posts()) : the_post(); ?>


                    <div class="item3to1">

                        <?php
                        /* foreach((get_the_category()) as $cats) {
                        if ($cats->cat_name !='Destacados') echo '<div class="tipoup textcenter">' . $cats->cat_name . '</div>';
                        } */
                        ?>
                        <a href="<?php the_permalink(); ?>">
						<div class="title h4 bgcolored white"><?php the_title(); ?></div>
                        <?php
                        if ( has_post_thumbnail() )
                        the_post_thumbnail();
                        else
                        echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/default-thumbnail.png' . '" alt="" />';
                        ?>


                        <div class="boxover">
                            <div class="h6 textjustify maxpad black minpadbottom medpadtop" style="min-height:166px;">
                                <?php echo get_the_excerpt(); ?>
                                <?php /* pa que sirve ? */ wp_reset_postdata(); ?>
                                <?php
                                //if (types_render_field("fecha-inicio", array('raw' => 'true'))) echo "<strong>Fecha Inicio:</strong> <font class=fecha>" . date("d/m/Y" , types_render_field("fecha-inicio", array('raw' => 'true')));
                                //echo "</font>";
                                ?>
                            </div>

                            <div style="position:relative; padding-right:6%;" class="h1 floatright colored width90 textright ">

                            <?php echo types_render_field("precio-presencial", array('raw' => 'true'));  ?>

                            </div>

                            <div style="position:relative; right:4%; " class="h6 floatright black minpadtop medpadbottom width90 textright">
                                MÁS INFORMACIÓN <div class="flecha minpadtop"></div>
                            </div>
                        </div>
                        </a>

                        <div class="floatright textright" style="margin-top: -1px;"><img src="/wp-content/uploads/esquina-cuadro-gris.png" /></div>
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>

    </div>
</div>

<div class="width100 clearboth minpadtop minpadbottom minspacebottom bannerform" style='background-image: url("/wp-content/uploads/bg-inscribete-coaching.jpg");'>
    <div class="row textcenter">
	<h2>¿No sabes que formación es la más adecuada para tí?</h2>
	<div class="bannertext">Solicita ahora 30 minutos gratis con nuestro Training Trader (Jesús Fernandez)
	sin ningún tipo de compromiso.</div>
	<?php echo do_shortcode('[contact-form-7 id="1778" title="Form Lead"]'); ?>
	</div>
</div>

<!-- ONLINE -->
<div class="width100">
    <div class="row darkgrey"><div class="maxline h3 minspace underline uppercase">FORMACIÓN GRATUITA</div></div>
</div>

<div class="width100 clearboth minpadtop">
    <div class="row textcenter">

<!-- HEAD PRODUCTOS ESTRELLA -->

            <?php query_posts( 'category_name=destacados'); ?>
			<?php /* query_posts( 'category_name=destacados&post_type=sfwd-courses'); */ ?>
            <?php if(have_posts()) : ?>

                 <?php while(have_posts()) : the_post(); ?>


                    <div class="item3to1">

                        <?php
                        /* foreach((get_the_category()) as $cats) {
                        if ($cats->cat_name !='Destacados') echo '<div class="tipoup textcenter">' . $cats->cat_name . '</div>';
                        } */
                        ?>
                        <a href="<?php the_permalink(); ?>">
						<div class="title h4 bgcolored white"><?php the_title(); ?></div>
                        <?php
                        if ( has_post_thumbnail() )
                        the_post_thumbnail();
                        else
                        echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/default-thumbnail.png' . '" alt="" />';
                        ?>


                        <div class="boxover">
                            <div class="h6 textjustify maxpad black minpadbottom medpadtop" style="min-height:166px;">
                                <?php echo get_the_excerpt(); ?>
                                <?php /* pa que sirve ? */ wp_reset_postdata(); ?>
                                <?php
                                //if (types_render_field("fecha-inicio", array('raw' => 'true'))) echo "<strong>Fecha Inicio:</strong> <font class=fecha>" . date("d/m/Y" , types_render_field("fecha-inicio", array('raw' => 'true')));
                                //echo "</font>";
                                ?>
                            </div>

                            <div style="position:relative; padding-right:6%; line-height: 0.8em;" class="h1 floatright colored width90 textright ">
                            Gratis
                            </div>

                            <div style="position:relative; right:4%; " class="h6 floatright black minpadtop medpadbottom width90 textright">
                                VER VIDEOS <div class="flecha minpadtop"></div>
                            </div>
                        </div>
                        </a>

                        <div class="floatright textright" style="margin-top: -1px;"><img src="/wp-content/uploads/esquina-cuadro-gris.png" /></div>
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>

    </div>
</div>




<!--<div class="width100 bgcolored medpadbottom">
    <div class="row">
        <div class="white h3 underline maxpadtop maxspacebottom">&nbsp; NUESTRO MÉTODO DE FORMACIÓN ON-LINE</div>

		<div class="width50to100 floatleft medpadbottom">
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
				<div class="width100">Además de los videos explicativos, el alumno tendrá acceso a una biblioteca de trading donde podrá leer artículos de calidad seleccionados por el profesor. </div>
			</div>
			<div class="width45 minpad textcenter white floatleft maxpadtop">
				<img src="/wp-content/uploads/icono-certificado.png">
				<div class="width100 h4 medpadbottom">Acceso al mercado</div>
				<div class="width100">Los alumnos avanzados tienen la ayuda de los profesores en su entrada real en el mercado.
				Los profesores revisarán tus estrategias y te aconsejarán de forma individual.</div>
			</div>
		</div>

		<div class="width50to100 floatleft">
                        <div class="width100 h4 medpadtop textcenter medpadbottom white floatright">Nuestro método explicado en un minuto</div>
			<div class="width100 floatright video-container">
                        <iframe src="https://player.vimeo.com/video/137833048" style="width:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

			</div>
		</div>

    </div>
</div>-->

<div class="width100 medpadbottom minpadtop">
    <div class="row">

		<!-- TESTIMONIALS -->
		<div class="width47to94 floatleft medpadbottom">
		    <div class="grey h3 underline maxpadtop maxspacebottom">&nbsp; OPINIONES</div>

			<!-- EXPERTO JESUS <div class="width100">
				<div class="width20 floatleft minpadleft maxsize"><img src="/wp-content/uploads/cara-jesus.png"></div>
				<div class="width70 floatright">
					<div class="h3 colored">Jesús Fernández</div>
					<div class="width100">Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet. Lorem ipsum sit dolor amet.</div>
				</div>
			</div>
			-->

			<!-- TESTIMONIO -->
			<div class="width90 medpad"><img src="/wp-content/uploads/comillas-testimonios.png" style="margin-top:-3px; margin-right:4px; vertical-align:top;" />
			Hice un curso completo de bolsa con Jesús y solo tengo palabras de agradecimiento hacia él,
			he aprendido conceptos y herramientas claves para poder enfrentarme a los mercados y sobre todo
			destacar dos cualidades que a mi entender son indispensables en este mundo: seriedad y profesionalidad.
			<div class="width100 floatright grey h6 textright italic minpadtop">Marcelo Sykuler (Argentina)</div>
			</div>



		</div>
		<!-- FIN TESTIMONIALS -->


		<!-- TESTIMONIOS -->
		<div class="width47to94 floatright medpadbottom">
		    <div class="grey h3 maxpadtop maxspacebottom hideonmobile">&nbsp;</div>

			<!-- TESTIMONIO -->
			<div class="width90 medpad"><img src="/wp-content/uploads/comillas-testimonios.png" style="margin-top:-3px; margin-right:4px; vertical-align:top;" /> Los cursos de futuros bolsa me han ayudado a entender la complejidad del trading y las
			mejores técnicas para tratar de obtener beneficios. Es práctico y directo. El profesor no intenta vender su idea sino que
			argumenta los motivos de cada decisión.
			<div class="width100 floatright grey h6 textright italic minpadtop">Guillermo Tamborero (España)</div>
			</div>

		</div>
		<!-- FIN TESTIMONIOS -->


    </div>
</div>

<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>
