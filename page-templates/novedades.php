<?php
/*
Template Name: Novedades
*/
?>
<?php get_header(); ?>
<section class="content">

<div class="width100 clearboth medpadtop medpadbottom">
    <div class="row">

        
<!-- HEAD PRODUCTOS ESTRELLA -->

            <?php query_posts( 'post_type=novedades'); ?>
            <?php if(have_posts()) : ?>
                
                 <?php while(have_posts()) : the_post(); ?>

                
                    <div class="item2 bglightgrey">

                        <a href="<?php the_permalink(); ?>">
                        <?php
                        if ( has_post_thumbnail() )
                        the_post_thumbnail();
                        else
                        echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/default-thumbnail.png' . '" alt="" />';
                        ?>
						
						<div class="maxpad">
							<div class="title minpadtop h3 minpadbottom normalstrong"><?php the_title(); ?></div></a>
							<div class="h6">    
								<?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>">Leer más...</a>
							</div>
						</div>
                    </div>

                 <?php endwhile; ?>
            <?php endif; ?>        
    </div>
</div>

<?php get_footer(); ?>