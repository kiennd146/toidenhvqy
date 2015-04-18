<?php
	//PERFORMING GALLERY POST LAYOUT...
	$page_layout = dt_theme_option('specialty', 'archives-layout');
	$page_layout = !empty($page_layout) ? $page_layout : 'with-left-sidebar';
	
	$post_layout = dt_theme_option('specialty', 'archives-post-layout');
	$post_layout = !empty($post_layout) ? $post_layout : 'one-column';
	
	$li_class = "";
	$feature_image = "";
	
	//POST LAYOUT CHECK...
	if($post_layout == "one-column") {
		$li_class = "gallery dt-sc-one-column column";
		$feature_image = "gallery-onecol";
	}
	elseif($post_layout == "one-half-column") {
		$li_class = "gallery dt-sc-one-half column";
		$feature_image = "gallery-twocol";
	}
	elseif($post_layout == "one-third-column") {
		$li_class = "gallery dt-sc-one-third column";
		$feature_image = "gallery-threecol";
	}
	elseif($post_layout == "one-fourth-column") {
		$li_class = "gallery dt-sc-one-fourth column";
		$feature_image = "gallery-fourcol";
	}
	
	//PAGE LAYOUT CHECK...
	if($page_layout != "content-full-width") {
		$li_class = $li_class." with-sidebar";
		$feature_image = $feature_image."-sidebar";
	}

	global $wp_query;	//FOR PAGINATION PURPOSE...
	if(have_posts()): ?>
     
     <div class="gallery-container"><?php
		while(have_posts()): the_post(); ?>
			<div class="<?php echo $li_class; ?>">
              <div class="gallery-thumb"><?php
				$fullimg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full', false);
				$currenturl = $fullimg[0];
				$currenticon = "fa-search";
				$pmeta_set = get_post_meta($post->ID, '_gallery_settings', true);
				if( @array_key_exists('items_thumbnail', $pmeta_set) && ($pmeta_set ['items_name'] [0] == 'video' )) {
					$currenturl = $pmeta_set ['items'][0];
					$currenticon = "fa-video-camera";
				}
				//GALLERY IMAGES...
				if(has_post_thumbnail()): 
					$attr = array('title' => get_the_title(), 'alt' => get_the_title()); 
					the_post_thumbnail($feature_image, $attr); 
				else: ?>
					<img src="http://placehold.it/940X470.jpg&text=No Image" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" /><?php
				endif; ?>
				<div class="image-overlay">
					<a class="link" href="<?php the_permalink(); ?>"> <span class="fa fa-link"> </span> </a>                
					<a class="zoom" title="<?php the_title(); ?>" data-gal="prettyPhoto[gallery]" href="<?php echo $currenturl; ?>"><span class="fa <?php echo $currenticon; ?>"> </span></a>
				</div>                        
              </div>
              <div class="gallery-detail">
                <div class="gallery-title">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php echo get_the_term_list($post->ID, 'gallery_entries', ' ', ', ', ' '); ?></p>
                </div>
                <?php if(dt_theme_is_plugin_active('roses-like-this/likethis.php')): ?>
                    <div class="views">
                        <span><i class="fa fa-heart"></i><br><?php printLikes($post->ID); ?></span>
                    </div>
                <?php endif; ?>    
              </div>
	        </div><?php
		endwhile; ?>
     </div>
     <div class="margin40"></div><?php
	 //Pagination...
	 if($wp_query->max_num_pages > 1): ?>
		<div class="pagination-wrapper">
			<?php if(function_exists("dt_theme_pagination")) echo dt_theme_pagination("", $wp_query->max_num_pages, $wp_query); ?>
		</div><?php
	 endif;
	 wp_reset_query($wp_query);
	 else: ?>
		<h2><?php _e('Nothing Found.', 'iamd_text_domain'); ?></h2>
		<p><?php _e('Apologies, but no results were found for the requested archive.', 'iamd_text_domain'); ?></p><?php
	endif; ?>