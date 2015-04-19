<?php get_header();

	  //GETTING META VALUES...
	  $page_layout = dt_theme_option('specialty', '404-layout');
	  
	  //BREADCRUMP...
	  if(dt_theme_option('general', 'disable-breadcrumb') != "on"): ?>
	      <!-- breadcrumb starts here -->
          <section class="breadcrumb-wrapper">
              <div class="container">
                  <h1><?php _e('Lost', 'iamd_text_domain'); ?></h1>
                  <?php new dt_theme_breadcrumb; ?>
              </div>
          </section>
		  <!-- breadcrumb ends here --><?php
	  endif; ?>
      
	  <!-- content starts here -->
	  <div class="content">
          <div class="container">
              <section class="<?php echo $page_layout; ?>" id="primary">
                  
                  <div class="dt-sc-one-half column first error-404">
                      <div class="error">
                          <img src="<?php echo get_template_directory_uri(); ?>/images/pizza.png" alt="" title="" />
                          <h2><?php _e('404!', 'iamd_text_domain'); ?></h2>
                          <h3><?php _e('Page not Found', 'iamd_text_domain'); ?></h3>
                      </div>
                      <?php
                        echo stripcslashes(dt_theme_option('specialty','404-message'));
                        get_search_form(); ?>
                  </div>
                  
                  <div class="dt-sc-one-half column"><?php
				  
				  	  // Media file not null...
					  if(dt_theme_option('specialty','menufile-url') != ''): ?>
					  <div class="grey-bg">
						  <h2 class="download-ico"><a href="<?php echo dt_theme_option('specialty','menufile-url'); ?>" title="<?php _e('Click to Download', 'iamd_text_domain'); ?>"><?php _e('Download our Menu', 'iamd_text_domain'); ?></a></h2>
					  </div><?php
					  endif;
					  
					  //Menu page not null...
					  if(dt_theme_option("specialty","404-menu-page") != ''): ?>
						  <div class="grey-bg">
							  <h2 class="menu-ico"><a href="<?php echo get_permalink(dt_theme_option("specialty","404-menu-page")); ?>" title="<?php _e('Click to View', 'iamd_text_domain'); ?>"><?php _e('Browse our Menu', 'iamd_text_domain'); ?></a></h2>
						  </div><?php
					  endif; ?>	  
                  </div>
                  
              </section>
              <?php if($page_layout != 'content-full-width' && $page_layout == 'with-left-sidebar'): ?>
                  <section class="left-sidebar" id="secondary"><?php get_sidebar(); ?></section>
              <?php elseif($page_layout != 'content-full-width' && $page_layout == 'with-right-sidebar'): ?>    
                  <section id="secondary"><?php get_sidebar(); ?></section>
              <?php endif; ?>    
          </div>
      </div>
      <!-- content ends here -->

<?php get_footer(); ?>