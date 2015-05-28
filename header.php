<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<div class="navigation">      
			<div class="container">
                <div class="row header-content">
                            <div class="col-xs-12 top-profile text-center">
                                <img src="wp-content/themes/neutrina/img/profile.png" class="img-circle">
                                <h4 class="no-margin">hello</h4>
                                <h5 class="no-margin">I'm Dayan Ramly Ramadhan,</h5>
                                <h5 class="no-margin">a front-end developer who love clean and responsive design.</h5>
                            </div>
<!--                 <div class="col-xs-12 col-md-8 text-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>  
                </div> -->
            </div>
        </div>
    </div>
</header>