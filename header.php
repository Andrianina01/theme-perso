<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- 
        Awesome Template
        http://www.templatemo.com/preview/templatemo_450_awesome
        -->
		<title>Awesome Responsive Website</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?= get_template_directory_uri() ?>/style.css">
		<?php wp_head() ?>
		<?php
		  $content_text_color = get_option('content_text_color');
		  $content_link_color = get_option('content_link_color');
		?>
		<style>
		  body { background-color:  <?php echo $content_text_color; ?>; }
		  body a { background-color:  <?php echo $content_link_color; ?>; }
		</style>
	</head>
	<body id="top">

		<!-- start preloader -->
		<div class="preloader">
			<div class="sk-spinner sk-spinner-wave">
     	 		<div class="sk-rect1"></div>
       			<div class="sk-rect2"></div>
       			<div class="sk-rect3"></div>
      	 		<div class="sk-rect4"></div>
      			<div class="sk-rect5"></div>
     		</div>
    	</div> 
    	<!-- <div class="preloader">
			<div class="list-carre">
				<div class="carre carre_1"></div>
				<div class="carre carre_2"></div>
			</div>
			<div class="logo"><img src="logo.svg"></div>
		</div> -->
    	<!-- end preloader -->

        <!-- start header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-phone"></i><span> telephone
                        </span><?php echo get_theme_mod('themeperso_numero'); ?></p>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <p><i class="fa fa-envelope-o"></i><span> Email</span><a href="mailto:giridesigns5@gmail.com"><?php echo get_theme_mod('themeperso_mail'); ?></a></p>
                    </div>
                    <div class="col-md-5 col-sm-4 col-xs-12">

                        <ul class="social-icon">
                            <li><span>Meet us on</span></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                            <li><a href="https://www.youtube.com/channel/UC4yzoGuKkCL_8FzI-B-x83A" class="fa fa-youtube"></a></li>
                            <li><a href="#" class="wpmem_loginout">Login</a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </header>
        <!-- end header -->

    	<!-- start navigation -->
		<nav class="navbar navbar-default templatemo-nav" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Awesome</a>
				</div>

				<!-- <div class="collapse navbar-collapse">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top">HOME</a></li>
						<li><a href="#about">ABOUT</a></li>
						<li><a href="#team">TEAM</a></li>
						<li><a href="#service">SERVICE</a></li>
						<li><a href="#portfolio">PORTFOLIO</a></li>
						<li><a href="#contact">CONTACT</a></li>
					</ul>
				</div> -->
				<?php wp_nav_menu(array(
						'theme_location' => 'Top',
			            'container'         => 'div',
			            'container_class'   => 'collapse navbar-collapse',
			            'menu_class'        => 'nav navbar-nav navbar-right',
			            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			            'walker'            => new WP_Bootstrap_Navwalker(),
					)); ?>
			</div>
		</nav>
		<div>
<!-- <p>Vous êtes ici : <?php // Breadcrumb navigation
         if (is_page() && !is_front_page() || is_single() || is_category()) {
         echo '<ul>';
         echo '<li><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a></li>';

         if (is_page()) {
            $ancestors = get_post_ancestors($post);

         if ($ancestors) {
             $ancestors = array_reverse($ancestors);

                 foreach ($ancestors as $crumb) {
                 echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
                 }
             }
         }

         if (is_single()) {
             $category = get_the_category();
             echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
         }

         if (is_category()) {
             $category = get_the_category();
             echo '<li>'.$category[0]->cat_name.'</li>';
         }

         // Current page
         if (is_page() || is_single()) {
            echo '<li>'.get_the_title().'</li>';
         }
             echo '</ul>';
         } elseif (is_front_page()) {
         // Front page
             echo '<ul>';
             echo '<li><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a></li>';
             echo '</ul>';
         }
?></p> --></div>
		<!-- end navigation -->