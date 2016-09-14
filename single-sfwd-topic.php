<?php get_header(); ?>

<!-- IMG HEADER -->
 <?php if (types_render_field("imagen-cabecera", array('raw' => 'true'))){ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;">
 <img src="<?php echo types_render_field("imagen-cabecera", array('raw' => 'true'));	?>" /></div>
 <?php }else{ ?>
 <div class="width100 realsize" style="margin-bottom:-7px; max-height:400px; overflow:hidden;"><img src="/wp-content/uploads/investigador1.jpg" /></div>
 <?php } ?>

<section class="content">

<div class="bgcolored width100" style="height:10px;"></div>

<div class="row">
	<!-- VENTAJAS -->
    <div class="width100 floatleft medpadtop medpadbottom">
        
        <div class="width65to100 textjustify floatleft check medpadbot">
            <div class="colored h1 medpadbottom  textleft"><?php the_title(); ?></div>
            <?php echo the_content(); ?>
            
        </div>
        <!--<div class="width30to95 textjustify floatright check">
            <?php get_sidebar(); ?>
        </div>-->
    </div>
</div>

</section><!--/.content-->

<?php get_footer(); ?>