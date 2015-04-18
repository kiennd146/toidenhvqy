<?php
global $post;
$catalog_settings = get_post_meta ( $post->ID, '_catalog_settings', TRUE );
$catalog_settings = is_array ( $catalog_settings ) ? $catalog_settings : array (); ?>

<!-- Additional Fields -->
<div class="custom-box">
    <div class="column one-eigth">
        <label><?php _e('Sub Title','dt_themes');?></label>
    </div>
    <div class="column one-fifth">
        <?php $v = array_key_exists("subtitle", $catalog_settings) ?  $catalog_settings['subtitle'] : '';?>
        <textarea id="subtitle" name="_subtitle" class="large" rows="3" style="width:100%;"><?php echo $v; ?></textarea>
        <p class="note"> <?php _e("You can given your sub title",'dt_themes');?> </p>
    </div>

    <div class="column one-eigth">
        <label><?php _e('Price','dt_themes');?></label>
    </div>
    <div class="column one-seventh">
        <?php $v = array_key_exists("price",$catalog_settings) ?  $catalog_settings['price'] : '';?>
        <input id="price" name="_price" class="large" type="text" value="<?php echo $v; ?>" style="width:100%;" />
        <p class="note"> <?php _e("Enter item price here (eg : $12.50)",'dt_themes'); ?> </p>
    </div>

    <div class="column one-eigth">
        <label><?php _e('Dummy Price','dt_themes');?></label>
    </div>
    <div class="column one-seventh">
        <?php $v = array_key_exists("dummyprice",$catalog_settings) ?  $catalog_settings['dummyprice'] : '';?>
        <input id="dummyprice" name="_dummyprice" class="large" type="text" value="<?php echo $v; ?>" style="width:100%;" />
        <p class="note"> <?php _e("Enter dummy item price here (eg : $12.50)",'dt_themes'); ?> </p>
    </div>

    <div class="column one-eigth">
        <label><?php _e('Link','dt_themes');?></label>
    </div>
    <div class="column one-fifth last">
        <?php $v = array_key_exists("link",$catalog_settings) ?  $catalog_settings['link'] : '';?>
        <input id="link" name="_link" class="large" type="text" value="<?php echo $v;?>" style="width:100%;" />
        <p class="note"> <?php _e("Enter item link here (eg : http://somedomain.com)",'dt_themes'); ?> </p>
    </div>
</div>
<!-- Additional Fields End -->