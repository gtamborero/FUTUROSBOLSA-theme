<?php get_header(); ?>

<!-- IMG HEADER -->
<section class="content">

<div class="bgcolored width100" style="height:10px;"></div>

<div class="row">
	<!-- VENTAJAS -->
    <div class="width100 floatleft medpadtop medpadbottom">
        
        <div class="width65to100 textjustify floatleft check medpadbot">
            <div class="colored h1 medpadbottom  textleft"><?php the_title(); ?></div>
            <?php echo the_content(); ?>
            
        </div>
        <div class="width30to95 textjustify floatright check">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

</section><!--/.content-->

<?php get_footer(); ?>