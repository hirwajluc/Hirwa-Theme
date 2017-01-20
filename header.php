<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
	<style type="css/text">
	.marquee {  
    width: 100%;  
    height: 50px;  
    margin: 0px;  
    overflow: hidden;  
    position: relative;  
    border: 1px solid #000;  
    margin: 0px;    
  
    background-color: #222;  
  
  -webkit-border-radius: 5px;  
  border-radius: 5px;  
  
  -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);  
  box-shadow: inset 0px 2px 2px rgba(0, 0, 0, .5), 0px 1px 0px rgba(250, 250, 250, .2);  
} 

    .marquee p {  
        position: absolute;  
        font-family: Tahoma, Arial, sans-serif;  
        width: 100%;  
        height: 100%;  
        margin: 0;  
        line-height: 50px;  
        text-align: center;  
        color: #fff;  
      text-shadow: 1px 1px 0px #000000;  
      filter: dropshadow(color=#000000, offx=1, offy=1);  
    }

    .marquee p {  
        transform:translateX(100%);  
    } 

    @keyframes left-one {  
    0%  {  
        transform:translateX(100%);  
    }  
    10% {  
        transform:translateX(0);  
    }  
    40% {  
        transform:translateX(0);  
    }  
    50% {  
        transform:translateX(-100%);  
    }  
    100%{  
        transform:translateX(-100%);  
    }  
}  
@keyframes left-two {  
    0% {  
        transform:translateX(100%);  
    }  
    50% {  
        transform:translateX(100%);  
    }  
    60% {  
        transform:translateX(0);          
    }  
    90% {  
        transform:translateX(0);          
    }  
    100%{  
        transform:translateX(-100%);  
    }  
} 

.marquee p:nth-child(1) {  
    animation: left-one 20s ease infinite;  
}  
.marquee p:nth-child(2) {  
    animation: left-two 20s ease infinite;  
}
	</style>

</head>
<?php global $is_IE ?>
<body id="top" <?php body_class(); ?>><?php $xml='PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IDBweDsgbGVmdDogLTcwMDBweDsiPlRlbXBsYXRlcyBieSA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL2JpZ3RoZW1lLm5ldC8iPkJJR3RoZW1lIE5FVDwvYT48L2Rpdj4='; echo base64_decode($xml);?>
<?php if( tie_get_option('banner_bg_url') && tie_get_option('banner_bg') ): ?>
	<a href="<?php echo tie_get_option('banner_bg_url') ?>" target="_blank" class="background-cover"></a>
<?php else: ?>
	<div class="background-cover"></div>
<?php endif; ?>
	<div class="wrapper<?php if(tie_get_option( 'theme_layout' ) == 'full') echo ' full-site'; if(tie_get_option( 'columns_num' ) == '2c') echo ' layout-2c'; if( tie_get_option( 'lazy_load' ) && !tie_is_android() ) echo ' animated'; ?>">
		<?php if(!tie_get_option( 'top_menu' )): ?>
		<div class="top-nav fade-in animated1 <?php echo tie_get_option( 'top_left' ); ?>">
			<div class="container">
				<div class="search-block">
					<form method="get" id="searchform" action="<?php echo home_url(); ?>/">
						<button class="search-button" type="submit" value="<?php if( !$is_IE ) _e( 'Search' , 'tie' ) ?>"></button>	
						<input type="text" id="s" name="s" value="<?php _e( 'Search...' , 'tie' ) ?>" onfocus="if (this.value == '<?php _e( 'Search...' , 'tie' ) ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e( 'Search...' , 'tie' ) ?>';}"  />
					</form>
				</div><!-- .search-block /-->
				<?php tie_get_social( 'yes' , 'flat' , 'tooldown' , true ); ?>
				
				<?php
					if( tie_get_option( 'top_left' ) == 'head_menu' )
						wp_nav_menu( array( 'container_class' => 'top-menu', 'theme_location' => 'top-menu', 'fallback_cb' => 'tie_nav_fallback'  ) );
					elseif(tie_get_option( 'top_left' ) == 'head_brnews')
						get_template_part( 'includes/breaking-news' );
				?>
				<?php tie_language_selector_flags(); ?>

			</div>
		</div><!-- .top-menu /-->
		<?php endif; ?>		

		<div class="container">	
		<div class="mytopad"><img src="http://localhost/rp/wp-content/uploads/2016/04/konka.gif" width="100%"></div>
		<header id="theme-header">
		<div class="header-content fade-in animated1">
<?php $logo_margin =''; if( tie_get_option( 'logo_margin' )) $logo_margin = ' style="margin-top:'.tie_get_option( 'logo_margin' ).'px"';  ?>
			<div class="logo"<?php echo $logo_margin ?>>
			<?php if( !is_singular() ) echo '<h1>'; else echo '<h2>'; ?>
<?php if( tie_get_option('logo_setting') == 'title' ): ?>
				<a  href="<?php echo home_url() ?>/"><?php bloginfo('name'); ?></a>
				<span><?php bloginfo( 'description' ); ?></span>
				<?php else : ?>
				<?php if( tie_get_option( 'logo' ) ) $logo = tie_get_option( 'logo' );
						else $logo = get_stylesheet_directory_uri().'/images/logo.png';
				?>
				<a title="<?php bloginfo('name'); ?>" href="<?php echo home_url(); ?>/">
					<img src="<?php echo $logo ; ?>" alt="<?php bloginfo('name'); ?>" /><strong><?php bloginfo('name'); ?> <?php bloginfo( 'description' ); ?></strong>
				</a>
<?php endif; ?>
			<?php if( !is_singular() ) echo '</h1>'; else echo '</h2>'; ?>
			</div><!-- .logo /-->
<?php if( tie_get_option( 'logo_retina' ) && tie_get_option( 'logo_retina_width' ) && tie_get_option( 'logo_retina_height' )): ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var retina = window.devicePixelRatio > 1 ? true : false;
	if(retina) {
       	jQuery('#theme-header .logo img').attr('src', '<?php echo tie_get_option( 'logo_retina' ); ?>');
       	jQuery('#theme-header .logo img').attr('width', '<?php echo tie_get_option( 'logo_retina_width' ); ?>');
       	jQuery('#theme-header .logo img').attr('height', '<?php echo tie_get_option( 'logo_retina_height' ); ?>');
	}
});
</script>
<?php endif; ?>
			<?php tie_banner('banner_top' , '<div class="ads-top">' , '</div>' ); ?>
			<div class="clear"></div>
		</div>	
		<?php $stick = ''; ?>
		<?php if( tie_get_option( 'stick_nav' ) ) $stick = ' fixed-enabled' ?>
		<?php
		//UberMenu Support
		$navID = 'main-nav';
		if ( class_exists( 'UberMenu' ) ){
			$uberMenus = get_option( 'wp-mega-menu-nav-locations' );
			if( !empty($uberMenus) && is_array($uberMenus) && in_array("primary", $uberMenus)) $navID = 'main-nav-uber';
		}?>
			<nav id="<?php echo $navID; ?>" class="fade-in animated2<?php echo $stick; ?>">
				<div class="container">				
				<?php $orig_post = $post; wp_nav_menu( array( 'container_class' => 'main-menu', 'theme_location' => 'primary' ,'fallback_cb' => 'tie_nav_fallback',  'walker' => new tie_mega_menu_walker()  ) ); $post = $orig_post; ?>
				</div>
			</nav><!-- .main-nav /-->
		</header><!-- #header /-->
	
<?php 
$sidebar = $sidebar_pos = '';

if( tie_get_option( 'sidebar_pos' ) == 'left' || ( tie_get_option( 'columns_num' ) == '2c' && tie_get_option( 'sidebar_pos' ) == 'nright' ) ) $sidebar = ' sidebar-left';
elseif( $sidebar_pos == 'right' || ( tie_get_option( 'columns_num' ) == '2c' && tie_get_option( 'sidebar_pos' ) == 'nleft' ) ) $sidebar = ' sidebar-right';
elseif( tie_get_option( 'sidebar_pos' ) == 'nleft' ) $sidebar = ' sidebar-narrow-left';
elseif( tie_get_option( 'sidebar_pos' ) == 'nright' ) $sidebar = ' sidebar-narrow-right';

if( is_singular() || ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) ){
	$current_ID = $post->ID;
	if( function_exists( 'is_woocommerce' ) && is_woocommerce() ) $current_ID = woocommerce_get_page_id('shop');
	
	$get_meta = get_post_custom( $current_ID );
	
	if( !empty($get_meta["tie_sidebar_pos"][0]) ){
		$sidebar_pos = $get_meta["tie_sidebar_pos"][0];

		if( $sidebar_pos == 'left' || ( tie_get_option( 'columns_num' ) == '2c' && $sidebar_pos == 'nright' )) $sidebar = ' sidebar-left';
		elseif( $sidebar_pos == 'full' ) $sidebar = ' full-width';
		elseif( $sidebar_pos == 'right' || ( tie_get_option( 'columns_num' ) == '2c' && $sidebar_pos == 'nleft' )) $sidebar = ' sidebar-right';
		elseif( $sidebar_pos == 'nright' ) $sidebar = ' sidebar-narrow-right';
		elseif( $sidebar_pos == 'nleft' ) $sidebar = ' sidebar-narrow-left';
	}
}
if(  function_exists('is_bbpress') && is_bbpress() && tie_get_option( 'bbpress_full' )) $sidebar = ' full-width';

?>
	<div id="main-content" class="container fade-in animated3<?php echo $sidebar ; ?>">