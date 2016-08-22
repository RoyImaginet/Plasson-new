<header class="banner">
  <div class="container">
	  <div class="col-md-3">
	    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/plasson_logo.png" alt="" width="" height="" />
	</a>
	  </div>
	  <div class="col-md-9">
	    <nav class="nav-primary">
	      <?php
	      if (has_nav_menu('primary_navigation')) :
	        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
	      endif;
	      ?>
	    </nav>
	  </div>
  </div>
</header>
