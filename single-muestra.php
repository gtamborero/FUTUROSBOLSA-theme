<?php get_header(); ?>

<!-- IMG HEADER -->

<section class="content">

<style>
p {text-align:justify;}
</style>

<div class="row">

    <div class="width100 floatleft medpadtop">
        <div class="colored h1"><?php the_title(); ?> 
			<div class="floatright"><?php echo do_shortcode('[addtoany]'); ?></div>
		</div>
        <div class="width100 textleft floatleft">
			
			<div class="floatleft width100 h6 textleft minpadbottom" style="color:#AAA;">
			<?php  echo get_the_term_list( $post->ID, 'noticias'); ?> - <?php the_date(); ?>
			</div>
							
			<div class="width40 floatright medpadleft"><?php if ( has_post_thumbnail() ) the_post_thumbnail(); ?></div>
       	 	<?php echo "hola"; the_content(); ?>
								
        </div>
    </div>
</div>



	
</section><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>