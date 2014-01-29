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
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/seedprod-logo-white.png" alt="SeedProd Logo"></a>
    </div>




    <nav class="collapse navbar-collapse" role="navigation">
<ul id="menu-top-menu" class="nav navbar-nav pull-right">
<li class="menu-home"><a href="/"><i class="fa-home fa"></i> Home</a></li>
<li class="menu-features"><a href="http://wordpress.dev/features/"><i class="fa-star fa"></i> Features</a></li>
<li class="menu-pricing"><a href="http://wordpress.dev/pricing/"><i class="fa-certificate fa"></i> Pricing</a></li>
<li class="menu-showcase"><a href="http://wordpress.dev/showcase/"><i class="fa-picture-o fa"></i> Showcase</a></li>
<li class="menu-blog"><a href="http://wordpress.dev/blog/"><i class="fa-pencil fa"></i> Blog</a></li>
<li class="menu-support"><a href="http://www.seedprod.com/support/"><i class="fa-user fa"></i> Support</a></li>
</ul>
      <?php
        // if (has_nav_menu('primary_navigation')) :
        //   wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav pull-right'));
        // endif;
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

