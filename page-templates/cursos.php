<?php
/*
Template Name: Cursos
*/
?>
<?php get_header(); ?>

<?php /* layerslider(1) */ ?>

<div class="width100">
    <div class="row darkgrey minpadtop"><div class="maxline h3 minspace underline">CURSOS ON-LINE</div></div>
</div>

<div class="width100 clearboth minpadtop">
    <div class="row textcenter">

<!-- HEAD PRODUCTOS ESTRELLA -->

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
                            <?php 

                                //Obtengo post ID de learndash relacionado con el post actual por URL
                                $postid = url_to_postid( types_render_field("accesourl", array('raw' => 'true')) );
                                //Obtengo array que contiene el precio del curso 
                                $arrayPrice = get_post_meta( $postid, "_sfwd-courses", true );
                                $importe = $arrayPrice["sfwd-courses_course_price"];
                                
                                if ($importe == 0): echo "Gratis"; else: echo $importe . '€<br />'; endif;
                                							
                            ?>
                            </div>
                         
                            <div style="position:relative; right:4%; " class="h6 floatright black minpadtop medpadbottom width90 textright"> 
                                INSCRÍBETE <div class="flecha minpadtop"></div>
                            </div>
                        </div>
                        </a>
                        
                        <div class="floatright textright" style="margin-top: -1px;"><img src="/wp-content/uploads/esquina-cuadro-gris.png" /></div>
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>
   
    </div>
</div>


<!-- PRESENCIALES -->
<div class="width100 minpadtop">
    <div class="row darkgrey"><div class="maxline h3 minspace underline">CURSOS PRESENCIALES</div></div>
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
                                INSCRÍBETE <div class="flecha minpadtop"></div>
                            </div>
                        </div>
                        </a>
                        
                        <div class="floatright textright" style="margin-top: -1px;"><img src="/wp-content/uploads/esquina-cuadro-gris.png" /></div>
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>
   
    </div>
</div>


<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>