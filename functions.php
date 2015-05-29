<?php
/*
 * @file functions.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 27-05-2015, 21:33:19 (-0500)
 */
?>
<?php
/* Activates the ability to add pictures to posts */
add_theme_support( 'post-thumbnails' ); 

/* Puts post on the front page */
function mainPage($category, $id) {
	if(is_category( $category )) {
		echo "<h1>" . get_the_title($id) . "</h1>";
		echo "<p>" . get_post_field('post_content', $id) . "</p>";
	} }

/* Add new menus in the admin panel */
add_theme_support( 'menus' );

/* Adds pagination, see category page for news */
function pagination() {

	if( is_singular() ) {
		return;
	}

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( 
			get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( 
			get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( 
			get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

/* Remove default jQuery, to add my own */
function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
    }
}
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function animalheroes_scripts() {
	wp_enqueue_style(
		'style'
		, get_stylesheet_directory_uri() . '/style.css'
		, false
		, '1.0.0'
		, 'all' );
	wp_enqueue_style(
		'style-colors'
		, get_stylesheet_directory_uri() . '/style-colors.css'
		, array('style')
		, '1.0.0'
		, 'all');
	wp_enqueue_style('bootstrap'
		, get_stylesheet_directory_uri() . '/css/bootstrap.min.css'
		, false
		, '3.0.0'
		, 'all' );

	wp_enqueue_script('jquery'
		, get_stylesheet_directory_uri() . '/js/jquery.min.js'
		, false
		, '1.10.2'
		, true );
	wp_enqueue_script('bootstrap-js'
		, get_stylesheet_directory_uri() . '/js/bootstrap.min.js'
		, array('jquery')
		, '3.0.0'
		, true );}

add_action( 'wp_enqueue_scripts', 'animalheroes_scripts' );

/* Create menus from admin-panel */
function menu($menu_name, $list) {
	if ( ($menu = wp_get_nav_menu_object( $menu_name ) ) 
	&& ( isset($menu) ) ) {	
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		foreach ( (array) $menu_items as $key => $menu_item ) {
			$title = $menu_item->title;
			$url = $menu_item->url;

			/* List types make no sense, needs rewrite */
			if($list === 0) {
				$menu_list .= '<a class="list-group-item" href="' . $url . '">' . 
					$title . '</a>';
			} elseif($list === 1) {
				$menu_list .= '<li><a href="' . $url . '">' . $title . 
'</a></li>';
			} elseif($list === 2) {
				$menu_list .= '<li><a role="button" aria-haspopup="true" href="' 
					. $url . '">' . $title . '</a></li>';
			} elseif($list === 3) {
				$menu_list .= '<li role="presentation"><a role="menuitem" href="' 
					. $url . '">' . $title . '</a></li>';
			} elseif($list === 4) {
				$menu_list .= '<a href="' . $url . '">' . $title . '</a>';
			}
		}
	
		echo $menu_list;
	}
}
?>
