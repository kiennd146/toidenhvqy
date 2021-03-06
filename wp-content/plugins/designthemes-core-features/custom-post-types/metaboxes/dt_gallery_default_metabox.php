<?php
global $post;
$gallery_settings = get_post_meta ( $post->ID, '_gallery_settings', TRUE );
$gallery_settings = is_array ( $gallery_settings ) ? $gallery_settings : array (); ?>

<!-- Additional Fields -->
<div class="custom-box meta-fields">
    <div class="column one-seventh">  
        <label><?php _e('Client Name','dt_themes');?></label>
    </div>
    <div class="column one-fourth">  
        <?php $v = array_key_exists("client",$gallery_settings) ?  $gallery_settings['client'] : '';?>
        <input id="client" name="_client" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your client name",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Location','dt_themes');?></label>
    </div>
    <div class="column one-fourth">  
        <?php $v = array_key_exists("location",$gallery_settings) ?  $gallery_settings['location'] : '';?>
        <input id="location" name="_location" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your client location",'dt_themes');?> </p>
    </div>

    <div class="column one-seventh">  
        <label><?php _e('Project Url','dt_themes');?></label>
    </div>
    <div class="column one-fourth last">  
        <?php $v = array_key_exists("url",$gallery_settings) ?  $gallery_settings['url'] : '';?>
        <input id="url" name="_url" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("You can given your client's project url",'dt_themes');?> </p>
    </div>
</div>
<!-- Additional Fields End -->

<!-- Layout -->
<div class="custom-box ">
	<div class="column one-sixth">
		<label><?php _e('Layout','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<ul class="dt-bpanel-layout-set"><?php
		
		$layouts = array (
				'single-gallery-layout-one' => 'gallery-fullwidth',
				'single-gallery-layout-two' => 'gallery-with-left-gallery',
				'single-gallery-layout-three' => 'gallery-with-right-gallery' 
		);
		
		$v = array_key_exists ( "layout", $gallery_settings ) ? $gallery_settings ['layout'] : 'single-gallery-layout-one';
		foreach ( $layouts as $key => $value ) {
			$class = ($key == $v) ? " class='selected' " : "";
			echo "<li><a href='#' rel='{$key}' {$class}><img src='" . plugin_dir_url ( __FILE__ ) . "images/columns/{$value}.png' /></a></li>";
		}
		?></ul>
		<?php $v = array_key_exists("layout",$gallery_settings) ? $gallery_settings['layout'] : 'single-gallery-layout-one';?>
		<input id="mytheme-gallery-layout" name="layout" type="hidden"
			value="<?php echo $v;?>" />
		<p class="note"> <?php _e("You can choose between a left, right or full width.",'dt_themes');?> </p>
	</div>

</div>
<!-- Layout End-->

<!-- Show Related Posts -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Related Projects','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	
	$switchclass = array_key_exists ( "show-related-items", $gallery_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-related-items", $gallery_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-related-item"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-related-item" class="hidden" type="checkbox"
			name="mytheme-related-item" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the related projects at the bottom','dt_themes');?> </p>
	</div>
</div>
<!-- Show Related Posts End-->

<!-- Show Social Share -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Show Social Share','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "show-social-share", $gallery_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "show-social-share", $gallery_settings ) ? ' checked="checked"' : '';
	?><div data-for="mytheme-social-share"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>
		<input id="mytheme-social-share" class="hidden" type="checkbox"
			name="mytheme-social-share" value="true" <?php echo $checked;?> />
		<p class="note"> <?php _e('Would you like to show the social share at the bottom','dt_themes');?> </p>
	</div>
</div>
<!-- Show Social Share End -->

<!-- Allow Comments -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Allow Comments','dt_themes');?></label>
	</div>
	<div class="column five-sixth last"><?php
	$switchclass = array_key_exists ( "comment", $gallery_settings ) ? 'checkbox-switch-on' : 'checkbox-switch-off';
	$checked = array_key_exists ( "comment", $gallery_settings ) ? ' checked="checked"' : '';
	
	?><div data-for="mytheme-gallery-comment"
			class="dt-checkbox-switch <?php echo $switchclass;?>"></div>

		<input id="mytheme-gallery-comment" class="hidden" type="checkbox"
			name="mytheme-gallery-comment" value="true" <?php echo $checked;?> />

		<p class="note"> <?php _e('YES! to allow comments on this page.','dt_themes');?> </p>
	</div>
</div>
<!-- Allow Comments End -->

<!-- Medias -->
<div class="custom-box">
	<div class="column one-sixth">
		<label><?php _e('Images','dt_themes');?> </label>
	</div>
	<div class="column five-sixth last">
		<div class="dt-media-btns-container">
			<a href="#" class="dt-open-media button button-primary"><?php _e( 'Click Here to Add Images', 'dt_themes' );?> </a>
			<a href="#" class="dt-add-video button button-primary"><?php _e( 'Click Here to Add Video', 'dt_themes' );?> </a>
		</div>
		<div class="clear"></div>

		<div class="dt-media-container">
			<ul class="dt-items-holder"><?php
			if (array_key_exists ( "items", $gallery_settings )) {
				foreach ( $gallery_settings ["items_thumbnail"] as $key => $thumbnail ) {
					$item = $gallery_settings ['items'] [$key];
					$out = "";
					$name = "";
					$foramts = array (
							'jpg',
							'jpeg',
							'gif',
							'png' 
					);
					$parts = explode ( '.', $item );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					if (in_array ( $ext, $foramts )) {
						$name = $gallery_settings ['items_name'] [$key];
						$out .= "<li>";
						$out .= "<img src='{$thumbnail}' alt='' />";
						$out .= "<span class='dt-image-name'>{$name}</span>";
						$out .= "<input type='hidden' name='items[]' value='{$item}' />";
					} else {
						$name = "video";
						$out .= "<li>";
						$out .= "<span class='dt-video'></span>";
						$out .= "<input type='text' name='items[]' value='{$item}' />";
					}
					
					$out .= "<input class='dt-image-name' type='hidden' name='items_name[]' value='{$name}' />";
					$out .= "<input type='hidden' name='items_thumbnail[]' value='{$thumbnail}' />";
					$out .= "<span class='my_delete'></span>";
					$out .= "</li>";
					echo $out;
				}
			}
			?></ul>
		</div>
	</div>
</div>
<!-- Medias End -->