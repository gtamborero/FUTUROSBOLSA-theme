<?php get_header(); ?>

<section class="content">

<div class="width100 clearboth minpadtop medpadbottom">
  <div class="row">
	<div class="textcenter h2 grey underline minpadbottom minspacebottom"> Novedades</div>
	<div class="textcenter h5 grey underline minpadbottom minspacebottom "> 
	<a href="http://www.futurosbolsa.dev/novedades/">Todas</a> 
	<?php // Selecciono la taxonomia (terms) creado en TYPES y saco las categorias creadas
	$terms = get_terms('noticias');
 	if ( !empty( $terms ) && !is_wp_error( $terms ) ){
		foreach ( $terms as $term ) {
       	echo  "&nbsp; <a href=". get_site_url() ."/noticias/" . $term->slug . ">" . $term->name . "</a> &nbsp;";
		}
	}
	?>
	</div>
	
<!-- HEAD PRODUCTOS ESTRELLA -->

           <?php /*query_posts( 'category_name=destacados');*/ ?>
            <?php if(have_posts()) : ?>
                
                 <?php while(have_posts()) : the_post(); ?>

                
                    <div class="item3 bglightgrey">
						<div class="width30 floatleft">
                        <a href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() )
                        the_post_thumbnail();
                        else
                        echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/default-thumbnail.png' . '" alt="" />';
                        ?>
						</div>
						<div class="micropadtop normalstrong width70 floatright">
							<div class="title h3"><?php the_title(); ?></div>
													
							<div class="floatleft width50 h6 minpadbottom textleft" style="color:#AAA;">
								<?php  echo get_the_term_list( $post->ID, 'noticias'); ?> - <?php the_date(); ?>
							</div>
						</div></a>

						<div class="h6 floatleft textjustify width65">    
							<?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Leer más...</a>
						</div>
						
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>          
    </div>
</div>


<?php get_footer(); ?>