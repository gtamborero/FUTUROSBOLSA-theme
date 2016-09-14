<?php get_header(); ?>

<section class="content">

<div class="width100 clearboth minpadtop medpadbottom">
    <div class="row">
	<div class="textcenter h2 grey underline minpadbottom minspacebottom"> Novedades</div>
	<div class="textcenter h5 grey underline minpadbottom minspacebottom "> Categorias | categorias</div>
        
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
						<div class="minpadtop h3 normalstrong width70 floatright"><div class="title"><?php the_title(); ?></div></div></a>
						<div class="h6 floatright width70">    
							<?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Leer más...</a>
						</div>
						
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>        
    </div>
</div>


<?php get_footer(); ?>