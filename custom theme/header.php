<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--------------Header--------------->
<header>
	<div class="wrap-header zerogrid">
		<div id="logo">
			<a href="#">
	         <?php 
	            $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id,'full');
 
        if (has_custom_logo() ){
            echo '<img src="' . esc_url( $logo[0] ) . '" class="logo" >';
        }else{
            echo '<img src="' . get_template_directory_uri().'/images/logo.png' . '" class="logo" >';
        }
			?>
			</a>
		</div>
		
		<div id="search">
			<div class="button-search"></div>
			<!-- dynamic search form -->
			<form method="get" action="<?php bloginfo('home'); ?>">
			<input type="text" name="s" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			</form>
			<!-- end dynamic search form -->

		</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
		     <?php 
		     wp_nav_menu(array(
		     	'theme_location'=>'headermenu',
		     	'fallback_cb'=>'default_menu'

		     ));
		     ?>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="index.html">Home</option>
				<option value="blog.html">Blog</option>
				<option value="gallery.html">Gallery</option>
				<option value="single.html">About</option>
				<option value="contact.html">Contact</option>
			</select>
		</div>		
	</div>
</nav>