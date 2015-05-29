<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<?php
/*
 * @file header.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Tue 26-05-2015, 18:26:54 (-0500)
 */
?>
	<title><?php if ( defined('WPSEO_VERSION') ) { wp_title(''); } else { if(is_home() OR is_404() OR is_search() ) { echo bloginfo("name"); echo " &middot; "; echo bloginfo("description"); } else { echo get_the_title(); echo " &middot; "; echo bloginfo("name");  } } ?></title>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Styles and scripts are in functions... -->

	<script>(function(){document.documentElement.className='js'})();</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php require 'inc/main-menu-mobile.php'; ?>

<div class="container">
	<div class="row move hide-on-mobile">
		<div class="col-sm-6 col-md-6">
			<a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-desktop-w3.jpg" width="195" height="63" alt="Animal Heroes." class="logo-big"></a>
		</div>
	
		<div class="col-sm-6 col-md-6">
				<form role="search" method="get" id="searchform" 
				class="navbar-form navbar-right" action="<?php echo home_url( '/' ); ?>">
						<input type="text" 
						class="form-control search-input" placeholder="Buscar" value="" name="s" id="s">
						<button type="submit" class="btn btn-default search-button pull-right">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar
						</button>
	      </form>
		</div>
	</div>

<?php require 'inc/main-menu.php'; ?>
