<?php
/*
 * @file submenu-mobile.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:15:17 (-0600)
 */
?>

<?php
/*
 * Check for mobile
 */

$category = get_the_category(); 
$category_parent_id = $category[0]->category_parent;

if ( $category_parent_id != 0 ) {
    $category_parent = get_term( $category_parent_id, 'category' );
    $category_top_slug = $category_parent->slug;
} else {
    $category_top_slug = $category[0]->slug;
}

if($category_top_slug === "inicio" || $category_top_slug === "noticias") {
	require "submenu-mobile-inicio.php";
}
elseif($category_top_slug === "animal-heroes") {
	require "submenu-mobile-animal-heroes.php";
}
elseif($category_top_slug === "campanas") {
	require "submenu-mobile-campanas.php";
}
elseif($category_top_slug === "se-un-heroe") {
	require "submenu-mobile-se-un-heroe.php";
}
elseif($category_top_slug === "misiones") {
	require "submenu-mobile-misiones.php";
}
elseif($category_top_slug === "centro-de-prensa") {
	require "submenu-mobile-centro-de-prensa.php";
}
elseif($category_top_slug === "dona") {
	require "submenu-mobile-dona.php";
}
else {
	/* 
	 * Check from single page
	 */

	if (is_category( )) {
		$yourcat = get_category (get_query_var('cat'));
		
		$category_parent_id = $yourcat->category_parent;
		$category_parent = get_term( $category_parent_id, 'category' );
		$single_top_slug = $category_parent->slug;

		if($single_top_slug === "inicio" || $single_top_slug === "noticias") {
			require "submenu-mobile-inicio.php";
		}
		elseif($single_top_slug === "animal-heroes") {
			require "submenu-mobile-animal-heroes.php";
		}
		elseif($single_top_slug === "campanas") {
			require "submenu-mobile-campanas.php";
		}
		elseif($single_top_slug === "se-un-heroe") {
			require "submenu-mobile-se-un-heroe.php";
		}
		elseif($single_top_slug === "misiones") {
			require "submenu-mobile-misiones.php";
		}
		elseif($single_top_slug === "centro-de-prensa") {
			require "submenu-mobile-centro-de-prensa.php";
		}
		elseif($single_top_slug === "dona") {
			require "submenu-mobile-dona.php";
		}
	}
}
?>
