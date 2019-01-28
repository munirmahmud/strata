<?php
if ( !defined( 'ABSPATH' ) )
	die( 'Direct access forbidden.' );
/**
 * This file is used all the way to the theme
 *
 * Custom functions that works independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package ThemesPry
 */

// simply echos the variable
function themespry_return( $s ) {
	return $s;
}

/*
 * FOR ONE PAGE Section
 * since 1.0
 */
function themespry_editor_data( $value ) {
	return wp_kses_post( $value );
}

// Gets unyson option data in safe mode
// since 1.0

function themespry_get_option( $k, $v = '', $m = 'theme-settings' ) {
	if ( defined( 'FW' ) ) {
		switch ( $m ) {
			case 'theme-settings':
				$v = fw_get_db_settings_option( $k );
				break;

			default:
				$v = '';
				break;
		}
	}
	return $v;
}

// Gets unyson image url from option data in a much simple way
// sience 1.0

function themespry_get_image( $k, $v = '', $d = false ) {

	if ( $d == true ) {
		$attachment = $k;
	} else {
		$attachment = themespry_get_option( $k );
	}

	if ( isset( $attachment[ 'url' ] ) && !empty( $attachment ) ) {
		$v = $attachment[ 'url' ];
	}

	return $v;
}

/* Gets unyson image url from variable
 * sience 1.0
 * themespry_image($img, $alt )
 */

function themespry_image( $img, $alt, $v = '' ) {

	if ( isset( $img[ 'url' ] ) && !empty( $img ) ) {
		$i	 = $img[ 'url' ];
		$v	 = "<img src=" . $i . " alt=" . $alt . " />";
	}

	return $v;
}

// Gets original page ID/ Slug
// since 1.0

function themespry_main( $id, $name = true ) {
	if ( function_exists( 'icl_object_id' ) ) {
		$id = icl_object_id( $id, 'page', true, 'en' );
	}

	if ( $name === true ) {
		$post = get_post( $id );
		return $post->post_name;
	} else {
		return $id;
	}
}

// Creates SEO friendly section ID from page ID. Returns page ID directly if $return = true
// since 2.0
function themespry_sectionID( $id, $returnID = false ) {

	if ( $returnID == false ) {

		$str		 = get_the_title( $id );
		$patterns	 = array(
			"/[:#+*+&+!+@+!+\.+?+%+$+\"+'+^+\[+<+{+\(+\)}+>+\]+,+`+;+,+=+\\\\]/", // match unwanted special characters
			"@<(script|style)[^>]*?>.*?</\\1>@si", // match <script>, <style> tags
			"/[~\r\n\t \/_|+ -]+/" // match newline, tab and more unwanted characters
		);

		$replacements = array(
			"", // for 1st match
			"", // for 2nd match
			"-" // for 3rd match
		);

		$str = preg_replace( $patterns, $replacements, strip_tags( $str ) );
		return strtolower( trim( $str, '-' ) );
	} else {

		return "section-$id";
	}
}

// Gets post's meta data in a much simplier way.
// since 1.0

function themespry_get_post_meta( $id, $needle ) {
	$data = get_post_meta( $id, 'fw_options' );
	if ( is_array( $data ) && isset( $data[ 0 ][ 'page_sections' ] ) ) {
		$data = $data[ 0 ][ 'page_sections' ];

		if ( is_array( $data ) ) {
			return themespry_seekKey( $data, $needle );
		}
	}
}

function themespry_seekKey( $haystack, $needle ) {
	foreach ( $haystack as $key => $value ) {

		if ( $key == $needle ) {
			return $value;
		} elseif ( is_array( $value ) ) {
			return themespry_seekKey( $value, $needle );
		}
	}
}

/*
 * btn Function
 * since 1.0
 */
//btn function

if ( !function_exists( 'themespry_theme_button_class' ) ) :

	function themespry_theme_button_class( $style ) {
		/**
		 * Display specific class for buttons - depends on theme
		 */
		if ( $style == 'default' ) {
			echo 'btn btn-border';
		} elseif ( $style == 'primary' ) {
			echo 'btn btn-primary';
		} elseif ( $style == 'dark' ) {
			echo 'btn btn-dark';
		} else {
			echo 'default';
		}
	}

endif;


/*
 * wpml compatitible
 */

if ( !function_exists( 'themespry_theme_translate' ) ) :

	function themespry_theme_translate( $content ) {
		/**
		 * Return the content for translations plugins
		 * @param string $content
		 */
		$content = html_entity_decode( $content, ENT_QUOTES, 'UTF-8' );

		if ( function_exists( 'icl_object_id' ) && strpos( $content, 'wpml_translate' ) == true ) {
			$content = do_shortcode( $content );
		} elseif ( function_exists( 'qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage' ) ) {
			$content = qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage( $content );
		}

		return $content;
	}

endif;


/*
 * This fucntion for recent post shortcode.
 * people can select show from one category or from all category
 * since 1.0
 */

// term
if ( !function_exists( 'themespry_get_category_term_list' ) ) :

	function themespry_get_category_term_list() {
		/**
		 * Return array of categories
		 */
		$taxonomy	 = 'category';
		$args		 = array(
			'hide_empty' => true,
		);

		$terms		 = get_terms( $taxonomy, $args );
		$result		 = array();
		$result[ 0 ] = esc_html__( 'All Categories', 'strata' );

		if ( !empty( $terms ) )
			foreach ( $terms as $term ) {
				$result[ $term->term_id ] = $term->name;
			}
		return $result;
	}

endif;




/*
 * Function for color RGB
 */

function themespry_color_rgb( $hex ) {
	$hex		 = preg_replace( "/^#(.*)$/", "$1", $hex );
	$rgb		 = array();
	$rgb[ 'r' ]	 = hexdec( substr( $hex, 0, 2 ) );
	$rgb[ 'g' ]	 = hexdec( substr( $hex, 2, 2 ) );
	$rgb[ 'b' ]	 = hexdec( substr( $hex, 4, 2 ) );

	$color_hex = $rgb[ "r" ] . ", " . $rgb[ "g" ] . ", " . $rgb[ "b" ];

	return $color_hex;
}

/*
 * Section Edit option
 *
 * This function for show section edit option in every section in one page
 *
 * Since 1.0
 *  */

function themespry_edit_section() {
	?>
	<div class="section-edit">
		<div class="container relative">
			<?php
			if ( is_user_logged_in() ) {
				edit_post_link( esc_html__( 'Edit', 'strata' ), '', '' );
			}
			?>
			<span class="section-abc"><?php echo esc_html( get_the_title() ); ?></span>
		</div>
	</div>
	<?php
}

if ( !function_exists( 'themespry_get_breadcrumbs' ) ) {

// breadcrumbs
	function themespry_get_breadcrumbs( $seperator = '' ) {
		echo '<div class="breadcrumb"><ul>';
		if ( !is_home() ) {
			echo '<li><a href="';
			echo esc_url( get_home_url( '/' ) );
			echo '">';
			echo esc_html__( 'Home', 'strata' );
			echo "</a></li> " . esc_attr( $seperator );
			if ( is_category() || is_single() ) {
				echo '<li>';
				$category	 = get_the_category();
				$post		 = get_queried_object();
				$postType	 = get_post_type_object( get_post_type( $post ) );
				if ( !empty( $category ) ) {
					echo esc_html( $category[ 0 ]->cat_name ) . '</li>';
				} else if ( $postType ) {
					echo esc_html( $postType->labels->singular_name ) . '</li>';
				}

				if ( is_single() ) {
					echo esc_attr( $seperator ) . "  <li>";
					echo wp_trim_words( get_the_title(), 3 );
					echo '</li>';
				}
			} elseif ( is_page() ) {
				echo '<li>';
				echo wp_trim_words( get_the_title(), 3 );
				echo '</li>';
			}
		}
		if ( is_tag() ) {
			single_tag_title();
		} elseif ( is_day() ) {
			echo"<li>" . esc_html__( 'Blogs for', 'strata' ) . " ";
			the_time( 'F jS, Y' );
			echo'</li>';
		} elseif ( is_month() ) {
			echo"<li>" . esc_html__( 'Blogs for', 'strata' ) . " ";
			the_time( 'F, Y' );
			echo'</li>';
		} elseif ( is_year() ) {
			echo"<li>" . esc_html__( 'Blogs for', 'strata' ) . " ";
			the_time( 'Y' );
			echo'</li>';
		} elseif ( is_author() ) {
			echo"<li>" . esc_html__( 'Author Blogs', 'strata' );
			echo'</li>';
		} elseif ( isset( $_GET[ 'paged' ] ) && !empty( $_GET[ 'paged' ] ) ) {
			echo "<li>" . esc_html__( 'Blogs', 'strata' );
			echo'</li>';
		} elseif ( is_search() ) {
			echo"<li>" . esc_html__( 'Search Result', 'strata' );
			echo'</li>';
		} elseif ( is_404() ) {
			echo"<li>" . esc_html__( '404 Not Found', 'strata' );
			echo'</li>';
		}
		echo '</div></ul>';
	}

}

function _filter_theme_disable_sliders( $sliders ) {
	$key1	 = array_search( 'owl-carousel', $sliders );
	$key2	 = array_search( 'nivo-slider', $sliders );
	$key3	 = array_search( 'bx-slider', $sliders );
	unset( $sliders[ $key1 ] );
	unset( $sliders[ $key2 ] );
	unset( $sliders[ $key3 ] );
	return $sliders;
}

add_filter( 'fw_ext_slider_activated', '_filter_theme_disable_sliders' );



/* Custom WP Menu */

if ( !function_exists( 'themespry_get_menu_list' ) ) {

	function themespry_get_menu_list() {
		$options = array();
		$navs	 = wp_get_nav_menus();
		if ( is_array( $navs ) && count( $navs ) > 0 ) {
			foreach ( $navs as $key => $val ) {
				$options[ $val->term_id ] = $val->name;
			}
			return $options;
		}
	}

}

/*
 * WP Kses Allowed HTML Tags Array
 * @Since Version 0.1
 * @param ar
 * Use: $allowed_html = themespry_allowed_html();
 * wp_kses($raw_string, $allowed_html);
 * */

function themespry_allowed_html() {

	$allowed_tags = array(
		'a'					 => array(
			'class'	 => array(),
			'href'	 => array(),
			'rel'	 => array(),
			'title'	 => array(),
		),
		'abbr'				 => array(
			'title' => array(),
		),
		'b'					 => array(),
		'blockquote'		 => array(
			'cite' => array(),
		),
		'cite'				 => array(
			'title' => array(),
		),
		'code'				 => array(),
		'del'				 => array(
			'datetime'	 => array(),
			'title'		 => array(),
		),
		'dd'				 => array(),
		'div'				 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'dl'				 => array(),
		'dt'				 => array(),
		'em'				 => array(),
		'h1'				 => array(),
		'h2'				 => array(),
		'h3'				 => array(),
		'h4'				 => array(),
		'h5'				 => array(),
		'h6'				 => array(),
		'i'					 => array(
			'class' => array(),
		),
		'img'				 => array(
			'alt'	 => array(),
			'class'	 => array(),
			'height' => array(),
			'src'	 => array(),
			'width'	 => array(),
		),
		'li'				 => array(
			'class'			 => array(),
			'data-target'	 => array(),
			'data-slide-to'	 => array(),
		),
		'ol'				 => array(
			'class' => array(),
		),
		'p'					 => array(
			'class' => array(),
		),
		'q'					 => array(
			'cite'	 => array(),
			'title'	 => array(),
		),
		'span'				 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'strike'			 => array(),
		'strong'			 => array(),
		'ul'				 => array(
			'class' => array(),
		),
		'data-wow-duration'	 => array(),
		'data-wow-delay'	 => array(),
	);

	return $allowed_tags;
}

/*
 * WP Kses Allowed HTML Tags Array in function
 * @Since Version 0.1
 * @param ar
 * Use: themespry_kses($raw_string);
 * */

function themespry_kses( $raw ) {

	$allowed_tags = array(
		'a'								 => array(
			'class'	 => array(),
			'href'	 => array(),
			'rel'	 => array(),
			'title'	 => array(),
		),
		'abbr'							 => array(
			'title' => array(),
		),
		'b'								 => array(),
		'blockquote'					 => array(
			'cite' => array(),
		),
		'cite'							 => array(
			'title' => array(),
		),
		'code'							 => array(),
		'del'							 => array(
			'datetime'	 => array(),
			'title'		 => array(),
		),
		'dd'							 => array(),
		'div'							 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'dl'							 => array(),
		'dt'							 => array(),
		'em'							 => array(),
		'h1'							 => array(),
		'h2'							 => array(),
		'h3'							 => array(),
		'h4'							 => array(),
		'h5'							 => array(),
		'h6'							 => array(),
		'i'								 => array(
			'class' => array(),
		),
		'img'							 => array(
			'alt'	 => array(),
			'class'	 => array(),
			'height' => array(),
			'src'	 => array(),
			'width'	 => array(),
		),
		'li'							 => array(
			'class' => array(),
		),
		'ol'							 => array(
			'class' => array(),
		),
		'p'								 => array(
			'class' => array(),
		),
		'q'								 => array(
			'cite'	 => array(),
			'title'	 => array(),
		),
		'span'							 => array(
			'class'	 => array(),
			'title'	 => array(),
			'style'	 => array(),
		),
		'strike'						 => array(),
		'br'							 => array(),
		'strong'						 => array(),
		'data-wow-duration'				 => array(),
		'data-wow-delay'				 => array(),
		'data-wallpaper-options'		 => array(),
		'data-stellar-background-ratio'	 => array(),
		'ul'							 => array(
			'class' => array(),
		),
	);

	if ( function_exists( 'wp_kses' ) ) { // WP is here
		$allowed = wp_kses( $raw, $allowed_tags );
	} else {
		$allowed = $raw;
	}


	return $allowed;
}

function custom_font_style( $style ) {
	if ( $style == 'gilroylight' ) {
		return "gilroylights, 'sans-serif'";
	} elseif ( $style == 'gilroyextrabold' ) {
		return "gilroyextrabold, 'sans-serif'";
	} else {
		return $style;
	}
}

if ( !function_exists( 'themespry_advanced_tp_font_styles' ) ) :

	/**
	 * Get shortcode advanced Font styles
	 *
	 */
	function themespry_advanced_tp_font_styles( $style ) {
		$font_styles = '';
		if ( isset( $style[ 'google_font' ] ) && ($style[ 'google_font' ] === true || $style[ 'google_font' ] === 'true') ) {

			$font_styles .= isset( $style[ 'family' ] ) ? 'font-family:' . custom_font_style( $style[ 'family' ] ) . ';' : '';

			if ( strpos( $style[ 'variation' ], 'italic' ) !== false )
				$font_styles .= 'font-style:italic;';
			elseif ( strpos( $style[ 'variation' ], 'oblique' ) !== false )
				$font_styles .= 'font-style: oblique;';
			else
				$font_styles .= 'font-style: normal;';

			$font_styles .= (intval( $style[ 'variation' ] ) == 0) ? 'font-weight:400;' : 'font-weight:' . intval( $style[ 'variation' ] ) . ';';
		} else {
			$font_styles .= isset( $style[ 'family' ] ) ? 'font-family:' . custom_font_style( $style[ 'family' ] ) . ';' : '';
			$font_styles .= isset( $style[ 'style' ] ) ? 'font-style:' . esc_attr( $style[ 'style' ] ) . ';' : '';
			$font_styles .= isset( $style[ 'weight' ] ) ? 'font-weight:' . esc_attr( $style[ 'weight' ] ) . ';' : '';
		}
		$font_styles .= isset( $style[ 'color' ] ) && !empty( $style[ 'color' ] ) ? 'color:' . esc_attr( $style[ 'color' ] ) . ';' : '';
		$font_styles .= isset( $style[ 'line-height' ] ) && !empty( $style[ 'line-height' ] ) ? 'line-height:' . esc_attr( $style[ 'line-height' ] ) . 'px;' : '';
		$font_styles .= isset( $style[ 'letter-spacing' ] ) && !empty( $style[ 'letter-spacing' ] ) ? 'letter-spacing:' . esc_attr( $style[ 'letter-spacing' ] ) . 'px;' : '';
		$font_styles .= isset( $style[ 'size' ] ) && !empty( $style[ 'size' ] ) ? 'font-size:' . esc_attr( $style[ 'size' ] ) . 'px;' : '';


		return !empty( $font_styles ) ? $font_styles : '';
	}

endif;




/**
 *
 * Get Catagories/Taxonomies List
 * @since 1.0.0
 *
 */
function tp_category_list( $cat ){
    $query_args = array(
        'orderby'       => 'ID',
        'order'         => 'DESC',
        'hide_empty'    => 1,
        'taxonomy'      => $cat
    );

    $categories = get_categories( $query_args );
    $options = array( esc_html__('0', 'strata') => 'All Category');
    if(is_array($categories) && count($categories) > 0){
        foreach ($categories as $cat){
            $options[$cat->term_id] = $cat->name;
        }
        return $options;
    }
}

/**
 *
 * Image Crop
 * @since 1.0.0
 *
 */
if ( class_exists( 'TP_Image_Resize' ) ) {
    function tp_img_resize( $url, $width = false, $height = false, $crop = false ) {
        $fw_resize = TP_Image_Resize::getInstance();
        $response  = $fw_resize->process( $url, $width, $height, $crop );
        return ( ! is_wp_error( $response ) && ! empty( $response['src'] ) ) ? $response['src'] : $url;
    }
}