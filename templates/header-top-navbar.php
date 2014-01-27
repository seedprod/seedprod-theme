<header id="header" role="banner">
  <div class="container">
    <nav id="nav" class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>
    </div>

    <div class="collapse navbar-collapse navbar-header-collapse">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right','link_before' => '<span>', 'link_after' => '</span>'));
        endif;
      ?>
    </div>
    </nav>
  </div>
</header>
