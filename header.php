<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(isset($class) ? $class : ''); ?>>
<header>
      <div class="container">
              <div class="row">
                      <div class="col col-md-10 col-md-offset-1">
                          <div class="header-wrapper">
                              <nav class="navbar navbar-default" role="navigation">
                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                      <span class="icon-bar"></span>
                                    </button>
                                  <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                             <img class="img-responsive" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/elastocrete-logo.png">

                                    </a>
                                  </div>

                                  <!-- Collect the nav links, forms, and other content for toggling -->
                                  <div class="collapse navbar-collapse">
                                   <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav navbar-right', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
                                  </div><!-- /.navbar-collapse -->
                                </nav>
                            </div><!-- /.header-wrapper -->
                      </div>
              </div>
      </div>
</header>