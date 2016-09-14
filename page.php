<?php get_header(); ?>

<section class="content">
	
<?php /* get_template_part('inc/page-title');*/ ?>
    
    <div class="row">
        <div class="floatleft width100 medpadtop minpadbottom">
        <?php the_content(); ?>	
        </div><!-- /FLOAT -->
    </div><!-- /ROW -->
</section><!--/.content-->

<?php /* get_sidebar(); */ ?>

<?php get_footer(); ?>