		<div class="clear"></div>
	</div><!-- .container /-->
	
	<div class="marque">
		<marquee align="left" direction="left" scrollamount="4" scrolldelay="0" width="100%" onmouseover="stop();" onmouseout="start();">
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/kinapartner.jpg" height="40" width="150"></a>  
			<a href="http://radio1rwanda.com/" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/radio1partners.jpg" height="40" width="150"></a>  
			<a href="http://tv1rwanda.com" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/tv1parners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/cityparners.jpg" height="40" width="150"></a>  
			<a href="http://isangostar.rw" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/isangoparners.jpg" height="40" width="150"></a> 
			<a href="radio10.rw" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/radio10parners.jpg" height="40" width="150"></a> 
			<a href="http://tv10rwanda.com" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/tv10parners.jpg" height="40" width="150"></a>
			<a href="http://flashfm.rw" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/flashpartners.jpg" height="40" width="150"> </a>
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/voaparners.jpg" height="40" width="150"></a>  
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/aflinkparners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"> <img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/kigaliwoodparners.jpg" height="40" width="150"></a>  
			<a href="http://rwandair.com" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/rwandaairparners.jpg" height="40" width="150"></a>  
			<a href="http://rwandafamily.tv" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/familytvparners.jpg" height="40" width="150"> </a>
			<a href="http://air-uganda.com" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/05/airugandaparners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/03/parners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"> <img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/03/parners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/03/parners.jpg" height="40" width="150"></a> 
			<a href="#" target="_blank"><img src="http://rwandapaparazzi.rw/wp-content/uploads/2014/03/parners.jpg" height="40" width="150"></a> 
		</marquee>
	</div>

	<?php tie_banner('banner_bottom' , '<div class="ads-bottom">' , '</div>' ); ?>
	</div><!-- .container -->

	<?php get_sidebar( 'footer' ); ?>				
	<div class="clear"></div>
	<div class="footer-bottom fade-in animated4">
		<div class="container">
			<?php if( tie_get_option('footer_social') ) tie_get_social( 'yes' , 'flat' , 'ttip' , true ); ?>
			<div class="alignleft">
			<?php
				$footer_vars = array('%year%' , '%site%' , '%url%');
				$footer_val  = array( date('Y') , get_bloginfo('name') , home_url() );
				$footer_one  = str_replace( $footer_vars , $footer_val , tie_get_option( 'footer_one' ));
				echo htmlspecialchars_decode( $footer_one );
			?>
			</div>
		</div><!-- .Container -->
	</div><!-- .Footer bottom -->
	
</div><!-- .Wrapper -->
<?php if( tie_get_option('footer_top') ): ?>
	<div id="topcontrol" class="tieicon-up-open" title="<?php _e('Scroll To Top' , 'tie'); ?>"></div>
<?php endif; ?>
<div id="fb-root"></div>
<?php wp_footer(); ?>
</body>
</html>