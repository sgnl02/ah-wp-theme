<?php
/*
 * @file banner.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:21:26 (-0600)
 */
?>

<?php
/*
 * Check banner and insert into page
 */

$category = get_the_category(); 
$category_parent_id = $category[0]->category_parent;

if ( $category_parent_id != 0 ) {
    $category_parent = get_term( $category_parent_id, 'category' );
    $category_top_slug = $category_parent->slug;
} else {
    $category_top_slug = $category[0]->slug;
}

if($category_top_slug === "inicio" || $category_top_slug === "noticias" || $category_top_slug === "dona") {
	require 'banner-inicio.php';
}
elseif($category_top_slug === "animal-heroes") {
	require 'banner-animal-heroes.php';
}
elseif($category_top_slug === "campanas") {
	require 'banner-campanas.php';
}
elseif($category_top_slug === "se-un-heroe") {
	require 'banner-se-un-heroe.php';
}
elseif($category_top_slug === "misiones") {
	require 'banner-misiones.php';
}
elseif($category_top_slug === "centro-de-prensa") {
	require 'banner-centro-de-prensa.php';
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

		if($single_top_slug === "inicio" || $single_top_slug === "noticias" || $category_top_slug === "dona") {
			require 'banner-inicio.php';
		}
		elseif($single_top_slug === "animal-heroes") {
			require 'banner-animal-heroes.php';
		}
		elseif($single_top_slug === "campanas") {
			require 'banner-campanas.php';
		}
		elseif($single_top_slug === "se-un-heroe") {
			require 'banner-se-un-heroe.php';
		}
		elseif($single_top_slug === "misiones") {
			require 'banner-misiones.php';
		}
		elseif($single_top_slug === "centro-de-prensa") {
			require 'banner-centro-de-prensa.php';
		}
	}
}
?>
