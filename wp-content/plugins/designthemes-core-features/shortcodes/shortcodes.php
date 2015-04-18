<?php
class DTCoreShortcodesDefination {
	
	function __construct() {
		
		/* Accordion Shortcode */
		add_shortcode ( "dt_sc_accordion_group", array (
				$this,
				"dt_sc_accordion_group" 
		) );
		
		/* Box Shortcode */
		add_shortcode ( "dt_sc_box", array (
				$this,
				"dt_sc_box" 
		) );
		
		/* Button Shortcode */
		add_shortcode ( "dt_sc_button", array (
				$this,
				"dt_sc_button" 
		) );
		
		/* Code Shortcode */
		add_shortcode ( "dt_sc_code", array (
				$this,
				"dt_sc_code" 
		) );
		
		/* Columns Shortcode */
		add_shortcode ( "dt_sc_one_half", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_one_third", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_one_fourth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_one_fifth", array (
				$this,
				"dt_sc_columns" 
		) );
		
		add_shortcode ( "dt_sc_one_sixth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_two_sixth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_two_third", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_three_fourth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_two_fifth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_three_fifth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_four_four", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_three_sixth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_four_fifth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_four_sixth", array (
				$this,
				"dt_sc_columns" 
		) );
		add_shortcode ( "dt_sc_five_sixth", array (
				$this,
				"dt_sc_columns" 
		) );
		
		/* Divider Shortcodes */
		
		add_shortcode ( "dt_sc_clear", array ( 
				$this,
				"dt_sc_clear"
		) );
		add_shortcode ( "dt_sc_hr", array (
				$this,
				"dt_sc_dividers" 
		) );
		add_shortcode ( "dt_sc_hr_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		add_shortcode ( "dt_sc_hr_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		add_shortcode ( "dt_sc_hr_invisible", array (
				$this,
				"dt_sc_dividers" 
		) );
		add_shortcode ( "dt_sc_hr_invisible_medium", array (
				$this,
				"dt_sc_dividers" 
		) );
		add_shortcode ( "dt_sc_hr_invisible_large", array (
				$this,
				"dt_sc_dividers" 
		) );
		
		/* Dropcap Shortcode */
		add_shortcode ( "dt_sc_dropcap", array (
				$this,
				"dt_sc_dropcap" 
		) );
		
		/* Highlighter Shortcode */
		add_shortcode ( "dt_sc_highlighter", array (
				$this,
				"dt_sc_highlighter" 
		) );
		
		/* Ordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ol", array (
				$this,
				"dt_sc_fancy_ol" 
		) );
		
		/* Unordered List Shortcode */
		add_shortcode ( "dt_sc_fancy_ul", array (
				$this,
				"dt_sc_fancy_ul" 
		) );
		
		/* Pricing Table */
		add_shortcode ( "dt_sc_pricing_table", array (
				$this,
				"dt_sc_pricing_table" 
		) );
		
		/* Pricing Table Item */
		add_shortcode ( "dt_sc_pricing_table_item", array (
				$this,
				"dt_sc_pricing_table_item" 
		) );
		
		/* Progress Bar Shortcode */
		add_shortcode ( "dt_sc_progressbar", array (
				$this,
				"dt_sc_progressbar" 
		) );
		
		/* PullQuotes Shortcode */
		add_shortcode ( "dt_sc_pullquote", array (
				$this,
				"dt_sc_pullquote" 
		) );
		
		/* BlockQuotes Shortcode */
		add_shortcode ( "dt_sc_blockquote", array (
				$this,
				"dt_sc_blockquote" 
		) );
		
		/* Tabs */
		add_shortcode ( "dt_sc_tab", array (
				$this,
				"dt_sc_tab" 
		) );
		add_shortcode ( "dt_sc_tabs_horizontal", array (
				$this,
				"dt_sc_tabs_horizontal" 
		) );
		add_shortcode ( "dt_sc_tabs_horizontal_frame_less", array (
				$this,
				"dt_sc_tabs_horizontal_frame_less" 
		) );
		add_shortcode ( "dt_sc_tabs_vertical", array (
				$this,
				"dt_sc_tabs_vertical" 
		) );
		
		/* Team Shortcode */
		add_shortcode ( "dt_sc_team", array (
				$this,
				"dt_sc_team" 
		) );
		
		/* Testimonial Shortcode */
		add_shortcode ( "dt_sc_testimonial", array (
				$this,
				"dt_sc_testimonial" 
		) );
		
		/* Toggle Shortcode */
		add_shortcode ( "dt_sc_toggle", array (
				$this,
				"dt_sc_toggle" 
		) );
		
		/* Toogle Framed Shortcode */
		add_shortcode ( "dt_sc_toggle_framed", array (
				$this,
				"dt_sc_toggle_framed" 
		) );
		
		/* Tooltip Shortcodes */
		add_shortcode ( "dt_sc_tooltip", array (
				$this,
				"dt_sc_tooltip" 
		) );
	}
	
	
	/**
	 *
	 * @param string $content        	
	 * @return string
	 */
	function dtShortcodeHelper($content = null) {
		$content = do_shortcode ( shortcode_unautop ( $content ) );
		$content = preg_replace ( '#^<\/p>|^<br \/>|<p>$#', '', $content );
		$content = preg_replace ( '#<br \/>#', '', $content );
		return trim ( $content );
	}
	
	
	/**
	 *
	 * @param string $dir        	
	 * @return multitype:
	 */
	function dtListImages($dir = null) {
		$images = array ();
		$icon_types = array (
				'jpg',
				'jpeg',
				'gif',
				'png' 
		);
		
		if (is_dir ( $dir )) {
			$handle = opendir ( $dir );
			while ( false !== ($dirname = readdir ( $handle )) ) {
				
				if ($dirname != "." && $dirname != "..") {
					$parts = explode ( '.', $dirname );
					$ext = strtolower ( $parts [count ( $parts ) - 1] );
					
					if (in_array ( $ext, $icon_types )) {
						$option = $parts [count ( $parts ) - 2];
						$images [$dirname] = str_replace ( ' ', '', $option );
					}
				}
			}
			closedir ( $handle );
		}
		
		return $images;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_accordion_group($attrs, $content = null) {
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = str_replace ( "<h5 class='dt-sc-toggle'>", "<h5 class='dt-sc-toggle-accordion'>", $content );
		$out = "<div class='dt-sc-toggle-frame-set'>{$out}</div>";
		
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_box($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => '',
				'title' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$type = (empty ( $type )) ? 'titled-box' : $type;
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		if ($type == 'titled-box') :
			$title = "<h6 class='dt-sc-{$type}-title' {$style}>{$title}</h6>";
			
			$out = "<div class='dt-sc-{$type} {$variation}'>";
			$out .= $title;
			$out .= "<div class='dt-sc-{$type}-content'>{$content}</div>";
			$out .= "</div>";
		 else :
			
			$out = "<div class='dt-sc-{$type}'>{$content}</div>";
		endif;
		
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_button($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'size' => '',
				'align' => '',
				'link' => '#',
				'target' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$size = ($size == 'xlarge') ? ' xlarge' : $size;
		$size = ($size == 'large') ? ' large' : $size;
		$size = ($size == 'medium') ? ' medium' : $size;
		$size = ($size == 'small') ? ' small' : $size;
		
		$align = ($align) ? ' align' . $align : '';
		
		$target = ($target) ? 'target="'.$target.'"' : '';
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$link = esc_url ( $link );
		
		$out = "<a href='{$link}' {$target} class='dt-sc-button {$size} {$align} {$variation}' {$style}>{$content}</a>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_code($attrs, $content = null) {
		$array = array (
				'[' => '&#91;',
				']' => '&#93;',
				'/' => '&#47;',
				'<' => '&#60;',
				'>' => '&#62;',
				'<br />' => '&nbsp;' 
		);
		$content = strtr ( $content, $array );
		$out = "<pre>{$content}</pre>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_columns($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'id' => '',
				'class' => '' 
		), $attrs ) );
		
		$shortcodename = str_replace ( "_", "-", $shortcodename );
		$id = ($id != '') ? " id = '{$id}'" : '';
		$first = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'first' )) ? 'first' : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<div {$id} class='column {$shortcodename} {$class} {$first}'>{$content}</div>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_clear($attrs, $content = null) {
		return '<div class="dt-sc-clear"></div>';
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @param string $shortcodename        	
	 * @return string
	 */
	function dt_sc_dividers($attrs, $content = null, $shortcodename = "") {
		extract ( shortcode_atts ( array (
				'class' => '',
				'top' => '' 
		), $attrs ) );
		
		if ("dt_sc_hr" === $shortcodename || "dt_sc_hr_medium" === $shortcodename || "dt_sc_hr_large" === $shortcodename) {
			
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			
			$out = "<div class='{$shortcodename} {$class}'>";
			
			if ((isset ( $attrs [0] ) && trim ( $attrs [0] == 'top' ))) {
				
				$out = "<div class='{$shortcodename} top {$class}'>";
				$out .= "<a href='#top' class='scrollTop'>" . __ ( "top", 'dt_themes' ) . "</a>";
			}
			
			$out .= "</div>";
		} else {
			$shortcodename = str_replace ( "_", "-", $shortcodename );
			$out = "<div class='{$shortcodename}  {$class}'></div>";
		}
		return $out;
	}
	
	
	/**
	 *
	 * @param string $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_dropcap($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => '',
				'variation' => '',
				'bgcolor' => '',
				'textcolor' => '' 
		), $attrs ) );
		
		$type = (empty ( $type )) ? 'dropcap-default' : $type;
		$bgcolor = ($type == 'dropcap-default') ? "" : $bgcolor;
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';border-color:' . $textcolor . ';';
		;
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<span class='dt-sc-dropcap $type {$variation}' {$style}>{$content}</span>";
		
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_highlighter($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => '',
				'bgcolor' => '',
				'textcolor' => '',
				'variation' => '' 
		), $attrs ) );
		
		$type = ($type) ? "highlight-{$type}" : "highlight";
		
		$variation = (($variation) && (empty ( $bgcolor ))) ? ' ' . $variation : '';
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		
		$out = "<span class='dt-sc-{$type} {$variation}' {$style}>{$content}</span>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ol($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ol>', "<ol class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		$content = str_replace ( '<li>', '<li><span>', $content );
		$content = str_replace ( '</li>', '</span></li>', $content );
		return $content;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return mixed
	 */
	function dt_sc_fancy_ul($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'style' => '',
				'variation' => '',
				'class' => '' 
		), $attrs ) );
		$style = ($style) ? trim ( $style ) : 'decimal';
		$class = ($class) ? trim ( $class ) : '';
		$variation = ($variation) ? ' ' . trim ( $variation ) : '';
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', "<ul class='dt-sc-fancy-list {$variation} {$class} {$style}'>", $content );
		return $content;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => '' 
		), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		return "<div class='dt-sc-pricing-table $type'>" . $content . '</div>';
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pricing_table_item($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'heading' => __( "Gift", 'dt_themes' ),
				'variation' => 'green',
				'price' => '',
				'price2' => '',
				"button_link" => "#",
				"button_text" => __ ( "Buy Now", 'dt_themes' ),
				"button_size" => "small" 
		), $attrs ) );
		
		$selected = (isset ( $attrs [0] ) && trim ( $attrs [0] == 'selected' )) ? 'selected' : '';
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = str_replace ( '<ul>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '<ol>', '<ul class="dt-sc-tb-content">', $content );
		$content = str_replace ( '</ol>', '</ul>', $content );
		$price = ! empty ( $price ) ? "<div class='dt-sc-price'> <span>$<span>$price</span></span>$price2<sup>$heading</sup></div>" : "";
		
		$out = "<div class='dt-sc-pr-tb-col $variation'>";
		$out .= '	<div class="dt-sc-tb-header">';
			$out .= $price;
		$out .= '	</div>';
		$out .= $content;
		$out .= '<div class="dt-sc-buy-now">';
		$out .= do_shortcode ( "[dt_sc_button size='$button_size' link='$button_link']" . $button_text . "[/dt_sc_button]" );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_progressbar($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'standard',
				'color' => '',
				'value' => '55',
				'textcolor' => '' 
		), $attrs ) );
		$type = ($type === 'standard') ? $type : $type;
		$type = ($type === 'progress-striped') ? 'progress-striped' : $type;
		$type = ($type === 'progress-striped-active') ? 'progress-striped active' : $type;
		
		$color = ! empty ( $color ) ? "style='background-color:$color;'" : "";
		$textcolor = ! empty ( $textcolor ) ? " style='color:{$textcolor}'" : "";
		
		$value_in_percentage = " - $value%";
		$value = "data-value='$value'";
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = $content . $value_in_percentage;
		
		$out = "<div class='dt-sc-progress dt-sc-$type'>";
		$out .= "<div class='dt-sc-bar' $color $value>";
		$out .= "<div class='dt-sc-bar-text' {$textcolor}>$content</div>";
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_pullquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'pullquote1',
				'icon' => '',
				'align' => '',
				'textcolor' => '',
				'cite' => '' 
		), $attrs ) );
		$class = array ();
		if (isset ( $type ))
			$class [] = " dt-sc-{$type}";
		if (trim ( $icon ) == 'yes')
			$class [] = ' quotes';
		if (preg_match ( '/left|right|center/', trim ( $align ) ))
			$class [] = ' align' . $align;
		$cite = ($cite) ? ' <cite>&ndash; ' . $cite . '</cite>' : '';
		$style = ($textcolor) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join ( '', array_unique ( $class ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<span class='{$class}' {$style}> {$content} {$cite}</span>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_blockquote($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'align' => '',
				'variation' => '',
				'textcolor' => '',
				'cite' => '' 
		), $attrs ) );
		$class = array ();
		if (preg_match ( '/left|right|center/', trim ( $align ) ))
			$class [] = ' align' . $align;
		if ($variation)
			$class [] = ' ' . $variation;
		
		$cite = ($cite) ? ' <cite>&ndash; ' . $cite . '</cite>' : '';
		$style = ($textcolor) ? ' style="color:' . $textcolor . ';"' : '';
		$class = join ( '', array_unique ( $class ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<blockquote class='{$class}' {$style}><q>{$content}</q> {$cite}</blockquote>";
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tab($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		$out = '<li class="tab_head"><a href="#">' . $title . '</a></li><div class="tabs_content">' . DTCoreShortcodesDefination::dtShortcodeHelper ( $content ) . '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_horizontal($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$E = $C = "";
		
		preg_match_all ( "'<li class=\"tab_head\">(.*?)</li>'si", $out, $match );
		foreach ( $match [0] as $val ) {
			$val = str_replace ( '<li class="tab_head">', '<li>', $val );
			$E .= $val;
		}
		preg_match_all ( "'<div class=\"tabs_content\">(.*?)</div>'si", $out, $match );
		foreach ( $match [0] as $val ) {
			$val = str_replace ( '<div class="tabs_content">', '<div class="dt-sc-tabs-frame-content">', $val );
			$C .= $val;
		}
		$out = '<div class="dt-sc-tabs-container">' . '<ul class="dt-sc-tabs-frame">' . $E . '</ul>' . $C . '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_horizontal_frame_less($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$E = $C = "";
		
		preg_match_all ( "'<li class=\"tab_head\">(.*?)</li>'si", $out, $match );
		
		foreach ( $match [0] as $val ) {
			$val = str_replace ( '<li class="tab_head">', '<li>', $val );
			$E .= $val;
		}
		
		preg_match_all ( "'<div class=\"tabs_content\">(.*?)</div>'si", $out, $match );
		
		foreach ( $match [0] as $val ) {
			$val = str_replace ( '<div class="tabs_content">', '<div class="dt-sc-tabs-content">', $val );
			$C .= $val;
		}
		$out = '<div class="dt-sc-tabs-container">' . '<ul class="dt-sc-tabs">' . $E . '</ul>' . $C . '</div>';
		
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_tabs_vertical($attrs, $content = null) {
		$out = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$E = $C = "";
		
		preg_match_all ( "'<li class=\"tab_head\">(.*?)</li>'si", $out, $match );
		foreach ( $match [0] as $key => $val ) {
			$key = $key + 1;
			$val = str_replace ( '<li class="tab_head"><a href="#">', '<li><a href="#">', $val );
			$E .= $val;
		}
		preg_match_all ( "'<div class=\"tabs_content\">(.*?)</div>'si", $out, $match );
		foreach ( $match [0] as $val ) {
			$val = str_replace ( '<div class="tabs_content">', '<div class="dt-sc-tabs-vertical-frame-content dt-sc-two-third column">', $val );
			$C .= $val;
		}
		$out = "<ul class='dt-sc-tabs-vertical-frame dt-sc-one-third column first'>$E</ul>";
		$out = "<div class='dt-sc-tabs-vertical-container'>$out" . "$C</div>";
		return $out;
	}
	
	
	/**
	 *
	 * @param unknown $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_team($attrs, $content = null) {
		
		$attributes = array (
				'name' => '',
				'image' => '',
				'role' => '' 
		);
		
		$sociables = array('fa-dribbble' => 'dribble', 'fa-flickr' => 'flickr', 'fa-github' => 'github', 'fa-pinterest' => 'pinterest','fa-twitter' => 'twitter', 'fa-youtube' => 'youtube', 'fa-android' => 'android', 'fa-dropbox' => 'dropbox', 'fa-instagram' => 'instagram', 'fa-windows' => 'windows', 'fa-apple' => 'apple', 'fa-facebook' => 'facebook', 'fa-google-plus' => 'googleplus', 'fa-linkedin' => 'linkedin', 'fa-skype' => 'skype', 'fa-tumblr' => 'tumblr', 'fa-vimeo-square' => 'vimeo');
		
		extract ( shortcode_atts ( $attributes, $attrs ) );
		
		$image = empty ( $image ) ? "http://placehold.it/230x230" : $image;
		
		$s = "";
		
		foreach ( $sociables as $key => $value ) {
			if(array_key_exists($value, $attrs))
				$s .= '<li><a class="fa '.$key.'" href="'.$attrs[$value].'" title="'.ucfirst($value).'"></a></li>';
		}		
		$s = ! empty ( $s ) ? "<div class='dt-sc-image-overlay'><ul class='dt-sc-social-icons'>$s</ul></div>" : "";
		
		$image = "<div class='dt-sc-entry-thumb'><img src='{$image}' alt='member-image' />".$s."</div>";
		
		
		$name = empty ( $name ) ? "" : "<h2>{$name}</h2>";
		$role = empty ( $role ) ? "" : "<h6>{$role}</h6>";
		
		if($name != '')
			 $name = '<div class="dt-sc-entry-title">'. $name . $role . '</div>';
		
		$out = '<div class="dt-sc-team">';
		$out .= $image . $name;
		$out .= '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_testimonial($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'name' => '',
				'role' => '',
				'image' => ''
		), $attrs ) );
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$content = ! empty ( $content ) ? "<q>{$content}</q>" : "";
		$role	 = ! empty ( $role ) ? "<br><i>{$role}</i>" : "";
		$name = ! empty ( $name ) ? "<cite> - {$name}{$role}</cite>" : "";
		$content = (! empty ( $content ) && ! empty ( $name )) ? "<blockquote>$content$name</blockquote>" : "";
		
		$out = '<div class="dt-sc-testimonial">';
		if (! empty ( $image )) {
			$img = "<img src='{$image}' alt='' />";
			$out .= "<div class='dt-sc-author'>$img</div>";
		}
		
		$out .= $content;
		$out .= '</div>';
		
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = "<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '<div class="dt-sc-block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '</div>';
		$out .= '</div>';
		return $out;
	}
	
	
	/**
	 *
	 * @param array $attrs        	
	 * @param string $content        	
	 * @return string
	 */
	function dt_sc_toggle_framed($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'title' => '' 
		), $attrs ) );
		
		$out = '<div class="dt-sc-toggle-frame">';
		$out .= "	<h5 class='dt-sc-toggle'><a href='#'>{$title}</a></h5>";
		$out .= '	<div class="dt-sc-toggle-content" style="display: none;">';
		$out .= '		<div class="dt-sc-block">';
		$out .= DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out .= '		</div>';
		$out .= '	</div>';
		$out .= '</div>';
		return $out;
	}
	
	
	/**
	 * @param array $attrs
	 * @param string $content
	 * @return string
	 */
	function dt_sc_tooltip($attrs, $content = null) {
		extract ( shortcode_atts ( array (
				'type' => 'top',
				'text' => '',
				'bgcolor' => '',
				'textcolor' => '',
				'link' => "#" 
		), $attrs ) );
		$class = "class=' ";
		$class .= ($type == "boxed") ? "boxed-tooltip" : "";
		$class .= " dt-sc-tooltip-$type'";
		$href = "href='{$link}'";
		$title = "title = '{$text}'";
		
		$styles = array ();
		if ($bgcolor)
			$styles [] = 'background-color:' . $bgcolor . ';border-color:' . $bgcolor . ';';
		if ($textcolor)
			$styles [] = 'color:' . $textcolor . ';';
		$style = join ( '', array_unique ( $styles ) );
		$style = ! empty ( $style ) ? ' style="' . $style . '"' : '';
		
		$style = ($type == "boxed") ? $style : "";
		
		$content = DTCoreShortcodesDefination::dtShortcodeHelper ( $content );
		$out = "<a {$href} {$title} {$class} {$style}>{$content}</a>";
		return $out;
	}
}
new DTCoreShortcodesDefination ();
?>