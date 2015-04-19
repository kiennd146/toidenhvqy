<?php
	//PERFORMING QUERY...
	$meta_set = get_post_meta($post->ID, '_tpl_default_settings', true);
	$catalog_cats = !empty($meta_set['catalog-categories']) ? $meta_set['catalog-categories'] : '';
	$post_layout = !empty($meta_set['catalog-post-layout']) ? $meta_set['catalog-post-layout'] : 'one-column';
	
	if(count($catalog_cats) <= 1)
		$catalog_cats = get_terms( array('catalog_entries'), array('fields' => 'ids'));
		
	$catalog_cats = array_filter($catalog_cats); ?>
        
    <div class="dt-sc-one-fourth column menu-sidebar first">
        <ul class="j-load-all">
        <?php
            foreach($catalog_cats as $term) {
                $myterm = get_term_by('id', $term, 'catalog_entries');
				$ic = get_option("taxonomy_term_$term"); ?>
                <li><a class="smoothScroll" href="#<?php echo strtolower($myterm->slug); ?>"><?php echo $myterm->name; ?><span class="fa <?php echo $ic['icon_class']; ?>"></span></a></li><?php
            }?>
        </ul>
    </div>

	<section class="dt-sc-three-fourth column"><?php
		//PERFORMING ITEMS...
		if(!empty($catalog_cats)):
			foreach($catalog_cats as $term) {
	
				$myterm = get_term_by('id', $term, 'catalog_entries'); ?>
				<h2 id="<?php echo strtolower($myterm->slug); ?>" class="hr-title"><span><?php echo $myterm->name; ?></span></h2><?php
				
				$args = array( 'post_type' => 'dt_catalog', 'posts_per_page' => -1, 'tax_query' => array( array( 'taxonomy' => 'catalog_entries', 'field' => 'id', 'terms' => $term ) ) );
				
				$the_query = new WP_Query($args);
				if($the_query->have_posts()): $i= 1; $temp_class = "";
					while($the_query->have_posts()): $the_query->the_post();
					
						if($post_layout == 'one-column'):
							get_template_part('includes/catalog-one-column');
							
						elseif($post_layout == 'one-half-column'):
						
							if($i == 1) $temp_class = " first";
							if($i == 2) $i = 1; else $i = $i + 1;
							
							//TWO COLUMN...
							$item_meta = get_post_meta($post->ID, '_catalog_settings', true);
							$subtitle = isset( $item_meta['subtitle']) ? $item_meta['subtitle'] : NULL;
							$price = isset( $item_meta['price']) ? $item_meta['price'] : NULL;
							$link = isset( $item_meta['link']) ? $item_meta['link'] : NULL; ?>
							
							<div class="dt-sc-one-half column <?php echo $temp_class; ?>">
								<div class="dt-sc-one-column column catalog-menu">
									<span class="rounded">
										<?php $attr = array('title' => get_the_title()); the_post_thumbnail('catalog-twocolumn', $attr); ?>
									</span>
									<h5><?php the_title(); ?></h5>
									<?php if(!empty($price)): ?><a class="price dt-sc-button small" href="<?php echo $link; ?>"><?php echo $price; ?></a><?php endif; ?>
								</div>
								<div class="margin30"></div>
							</div><?php
						endif;
					endwhile;
				endif;
			}
		else: ?>
			<h2><?php _e('Nothing Found.', 'iamd_text_domain'); ?></h2>
			<p><?php _e('Apologies, but no results were found for the requested archive.', 'iamd_text_domain'); ?></p><?php
		endif; ?> 
    </section>