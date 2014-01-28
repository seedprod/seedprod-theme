<div id="banner-area">
<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.seedprod.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seedprod-logo-white.png" alt="SeedProd Logo"></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav pull-right'));
        endif;
      ?>
    </nav>
  </div>
</header>
  <?php
  if ( is_front_page() ) {
    get_template_part( 'templates/content', 'featured' );
  }
  ?>
<div id="banner-bar"></div>
</div>

