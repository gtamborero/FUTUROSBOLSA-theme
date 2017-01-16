<?php get_header(); ?>

<section class="content">

<div class="width100 clearboth minpadtop medpadbottom">
    <div class="row textcenter">
	<div class="textcenter h2 grey underline minpadbottom minspacebottom"> <?php $cats = get_the_category(); echo $cats[0]->name; ?> </div>
	
        
<!-- HEAD PRODUCTOS ESTRELLA -->

            <?php /*query_posts( 'category_name=destacados');*/ ?>
            <?php if(have_posts()) : ?>
                
                 <?php while(have_posts()) : the_post(); ?>

                
                    <div class="item2 bglightgrey">

                        <a href="<?php the_permalink(); ?>">
						<div class="flecha"></div>
                        <?php
                        if ( has_post_thumbnail() )
                        the_post_thumbnail();
                        else
                        echo '<img src="' . trailingslashit( get_stylesheet_directory_uri() ) . 'img/default-thumbnail.png' . '" alt="" />';
                        ?>
						
						<div class="maxpad medpadbottom textjustify">
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


<div class="width100 bglightgrey clearboth maxspacetop floatleft">
<div class="bgcolored width100" style="height:10px;"></div>
<div class="textcenter minpadbottom"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/wp-content/uploads/pegatina.png" style="z-index:9999; width:200px; position:relative; margin-top:-102px;" /></div>

    	<div class="row minpadbottom minpadtop">
					
        
<!-- HEAD PRODUCTOS ESTRELLA SMOOTH SLIDER + DESACTIVACION CLICK -->
<script>
jQuery( document ).ready(function() {
	jQuery(".smooth_slider a").click(function( event ) {
	event.preventDefault();
	});
});
</script>
<?php if(function_exists("get_smooth_slider_category")){get_smooth_slider_category($catg_slug="casos-exito");}?>

    </div>
</div>


<?php get_footer(); ?>