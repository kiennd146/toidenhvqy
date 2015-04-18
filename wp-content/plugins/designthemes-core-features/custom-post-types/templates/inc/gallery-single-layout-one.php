<?php
	$p_meta_set = get_post_meta($post->ID, '_gallery_settings', true);
	$page_layout = $p_meta_set['layout']; ?>
    
    <div class="gallery-single-fullwidth">
        <div class="gallery-thumb full-width">
            <div class="gallery-slider-container">
                <ul class="gallery-slider"><?php
                    //GETTING GALLERY VALUES...
                    global $wp_embed;
                        
                    if(isset($p_meta_set['items']) != ""):
						foreach($p_meta_set['items'] as $key => $item):
                        echo "<li>";
                            if($p_meta_set ['items_name'] [$key] != 'video')
								echo "<img src='".$item."' alt='".$p_meta_set ['items_name'] [$key]."'>";
                            else {
								//For Vimeo...
								if ( strpos($item, "vimeo") ) :
									$url = substr( strrchr($item, "/"),1);
									echo "<iframe src='http://player.vimeo.com/video/{$url}' width='940' height='470' frameborder='0'></iframe>";
		
								//For Youtube...
								elseif( strpos($item, "?v=") ):
									$url = substr( strrchr($item, "="),1);
									echo "<iframe src='http://www.youtube.com/embed/{$url}?wmode=opaque' width='940' height='470' frameborder='0'></iframe>";
								endif;
							}	
                        echo "</li>";
                    	endforeach;
					endif; ?>
                </ul>
            </div>
        </div>
        <div class="column dt-sc-two-third first">
		<h2 class="hr-title"><span><?php the_title(); ?></span></h2><?php
			the_content();
			wp_link_pages(array('before' => '<div class="page-link"><strong>'.__('Pages:', 'iamd_text_domain').'</strong> ', 'after' => '</div>', 'next_or_number' => 'number'));
			edit_post_link(__('Edit', 'iamd_text_domain'), '<span class="edit-link">', '</span>' ); ?>
        </div>
        <div class="column dt-sc-one-third">
            <div class="content-box">
                <h4><?php _e('Project Details', 'iamd_text_domain'); ?></h4>
                <ul class="project-details">
                    <?php if(isset($p_meta_set['client'])): ?><li><span><?php _e('Client: ', 'iamd_text_domain'); ?></span><?php echo $p_meta_set['client']; ?></li><?php endif; ?>
                    <?php if(isset($p_meta_set['location'])): ?><li><span><?php _e('Location: ', 'iamd_text_domain'); ?></span><?php echo $p_meta_set['location']; ?></li><?php endif; ?>
                    <li><span><?php _e('Posted On: ', 'iamd_text_domain'); ?></span><?php echo get_the_date('d')." ".get_the_date('M')." ".get_the_date('Y'); ?></li>
                </ul>
				<?php if(isset($p_meta_set['show-social-share'])): ?><div class="gallery-share"><?php dt_theme_social_bookmarks('sb-gallery'); ?></div><?php endif; ?>
                <?php if(isset($p_meta_set['url'])): ?><a href="<?php echo $p_meta_set['url']; ?>" class="dt-sc-button small" target="_blank"><?php _e('View Project', 'iamd_text_domain'); ?></a><?php endif; ?>
            </div>
        </div>
    </div>
    <div class="margin10"></div>
    <?php if(dt_theme_option('general', 'disable-gallery-comment') != true && (isset($p_meta_set['comment']) != "")) { echo '<div class="margin50"></div>'; comments_template('', true); } ?>