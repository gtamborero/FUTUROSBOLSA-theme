<?php get_header(); ?>


<!-- IMG HEADER -->
<section class="content">

<div class="bgcolored width100" style="height:10px;"></div>

<div class="row">
	<!-- VENTAJAS -->
    <div class="width100 floatleft medpadtop medpadbottom">
        
        <div class="width65to100 textjustify floatleft check medpadbot">
            <div class="colored h1 medpadbottom  textleft"><?php the_title(); ?></div>
            <?php if (types_render_field("descripcionleccion", array('raw' => 'true'))): ?>
            <div class="h6 textleft medpadbottom"><?php echo nl2br(types_render_field("descripcionleccion", array('raw' => 'true'))); ?></div>
            <?php endif; ?>
            <?php if (types_render_field("videoleccion", array('raw' => 'true'))): ?>
            <div class="width100 floatright video-container">
                <iframe src="<?php echo types_render_field("videoleccion", array('raw' => 'true')); ?>" width="100%" height="100%" frameborder="0" allowfullscreen="allowfullscreen">
                </iframe>
            </div>
            <?php endif; ?>
            <div class="h6 textleft clearboth medpadtop"><?php echo the_content(); ?></div>
            <div class="colored h4 minpadbottom textleft width100 maxpadtop"><?php echo types_render_field("titularleccion", array('raw' => 'true')); ?></div>
            <div class="h6 textleft"><?php echo types_render_field("datosleccion", array('raw' => 'true')); ?></div>
        </div>
        <div class="width30to95 textjustify floatright check">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

</section><!--/.content-->

<?php get_footer(); ?>