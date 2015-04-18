<?php get_header();

	  //GETTING META VALUES...
	  $page_layout = dt_theme_option('specialty', 'archives-layout');
	  
	  //BREADCRUMP...
	  if(dt_theme_option('general', 'disable-breadcrumb') != "on"): ?>
          <!-- breadcrumb starts here -->
          <section class="breadcrumb-wrapper">
              <div class="container">
                  <h1><?php _e('Category Archives of : ', 'dt_themes'); echo single_cat_title(); ?></h1>
                  <?php new dt_theme_breadcrumb; ?>
              </div>                      
          </section>
          <!-- breadcrumb ends here -->
	  <?php endif; ?>    

	  <!-- content starts here -->
	  <div class="content">
          <div class="container">
              <section class="<?php echo $page_layout; ?>" id="primary">
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php
                      //PERFORMING ARCHIVE LAYOUT...
                      include(dirname(__FILE__).'/inc/catalog-archive-layout.php'); ?>
                  </article>
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