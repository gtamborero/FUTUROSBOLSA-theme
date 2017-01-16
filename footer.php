				</div><!--/.main-inner-->

			</div><!--/.main-->

		</div><!--/.container-inner-->

	</div><!--/.container-->



	<footer id="footer">
				<div class="width100 bgblack ">
					<div class="row white minpad minpadtop " style="padding-bottom:3.2%;">
						<div class="width25 floatleft textleft">
						<a href="http://www.iproject.cat" target="_NEW" style="font-size:12px; float:left;">Handmade by &nbsp; <img src="http://www.martinezcomin.com/wp-content/themes/arras/images/iproject-blanco.png" style="margin-top:1.8%; float:right;"> </a>

						</div>
						<div class="width70 h6static floatright textright medpadbottom medline">Copyright © 2015 <?php echo $_SERVER['SERVER_NAME']; ?> -  <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/aviso-legal" >Aviso Legal</a><br />Paseo de Gracia 12, 1° 08007 <span style="color:#aaa";>Barcelona</span> &nbsp;|&nbsp; Calle Velázquez 86-B, 28006 <span style="color:#aaa";>Madrid</span> <br />Telf: 639 36 41 40 &nbsp;|&nbsp; <a href="mailto:info@futurosbolsa.com" >info@futurosbolsa.com</a></div>

				</div>
			</div><!--/.container-inner-->
		</section><!--/.container-->
	</footer><!--/#footer-->



</div><!--/#wrapper-->



<?php wp_footer(); ?>

 <script>
// COOKIES JQUERY
// VARIABLES
empresa ="CFIT";
linkPoliticaCookies ="http://<?php echo $_SERVER['SERVER_NAME']; ?>/politica-de-cookies";
colorBoton = "#fff"
fondoBoton = "#98C31E";
fondoOverBoton = "#D9EF9C";
colorCookies = "#98C31E";
colorOverCookies = "#D9EF9C";

// COOKIES PREPARE
jQuery( document ).ready(function() {

    //MOSTRAR UNA SOLA VEZ
    function getCookieData( name ) {
        var pairs = document.cookie.split("; "),
            count = pairs.length, parts;
        while ( count-- ) {
            parts = pairs[count].split("=");
            if ( parts[0] === name )
                return parts[1];
        }
        return false;
    }

    var lacookie = getCookieData("lacookie");
    if ( lacookie == '') {

        //General CSS
        jQuery("body").prepend('<div id=cookieAlert></div>');
        jQuery("#cookieAlert").css("background-color", "#000");
        jQuery("#cookieAlert").css("color", "#eee");
        jQuery("#cookieAlert").css("text-align", "center");
        jQuery("#cookieAlert").css("font-size", "12px");
        jQuery("#cookieAlert").css("padding", "15px");
		jQuery("#cookieAlert").css("line-height", "24px");

        // TEXTO
        jQuery("#cookieAlert").html("Usamos cookies de terceros para recoger información sobre sus visitas y el uso que hace de nuestra web. En caso de continuar navegando por esta web entenderemos que acepta el uso de estos dispositivos. Más información: <a id=cookies href="+ linkPoliticaCookies +">política de cookies</a>. &nbsp; <a id=acepto>Acepto</a> ");

        jQuery("#cookieAlert a").css("cursor", "pointer");

        jQuery("#cookieAlert #acepto").css("padding", "5px 9px");
        jQuery("#cookieAlert #acepto").css("background-color", fondoBoton);
        jQuery("#cookieAlert #acepto").mouseenter(function(){
            jQuery("#cookieAlert #acepto").css("background-color", fondoOverBoton);
        }).mouseleave(function(){
            jQuery("#cookieAlert #acepto").css("background-color", fondoBoton);
        });
        jQuery("#cookieAlert #acepto").css("color", colorBoton);
        jQuery("#cookieAlert #acepto").click(function(){
            jQuery("#cookieAlert").hide("fast");
            document.cookie = 'lacookie=1; path=/';
            //console.log(document.cookie);
        });

        // Link politica cookies
        jQuery("#cookieAlert #cookies").css("color", colorCookies);
        jQuery("#cookieAlert #cookies").mouseenter(function(){
        jQuery("#cookieAlert #cookies").css("color", colorOverCookies);
        }).mouseleave(function(){
        jQuery("#cookieAlert #cookies").css("color", colorCookies);
        });
    };

    jQuery('.wpcf7-submit').prop('title', 'Recuerde aceptar la política de cookies');
});
// COOKIES FIN

//VIEWPORT
	function mobileFriendly() {
		setTimeout(function () {
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
			var ww = ( document.documentElement.clientWidth < window.screen.width ) ? jQuery(window).width() : window.screen.width; //get proper width
			var mw = 720;
			//alert ("width" + ww);
			var ratio = ww / mw; //calculate ratio
			//alert ("ratio: " + ratio);
				if( ratio < 1 ){ //smaller than minimum size
					jQuery("meta[name='viewport']").attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + mw);
				}else{ //regular size
					jQuery("meta[name='viewport']").attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
				}
			}
        }, 600);
	}

	jQuery( document ).ready(
	mobileFriendly()
	);

	window.addEventListener("orientationchange", mobileFriendly, false);

</script>
</body>

</html>
