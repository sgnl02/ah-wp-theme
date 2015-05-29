<?php
/*
 * Template Name: Index
 *
 * @file index.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:40:24 (-0600)
 */
?>
<?php get_header(); ?>

	<?php require 'inc/index-carousel.php'; ?>
	<div class="row show-mobile-banner">
		<?php require 'inc/banner-inicio.php'; ?>
	</div>

	<div class="row">
		<div class="col-xs-12">
		<?php require 'inc/submenu-mobile-inicio.php'; ?>
		</div>
	</div>

	<div class="row row-content">
		<div class="col-sm-4 col-md-3">
			<div class="menu-helper hide-on-mobile">
				<?php require 'inc/submenu-inicio.php'; ?>
			</div>
		</div>

    <div class="col-sm-8 col-md-9">
			<?php require 'inc/index-articles.php'; ?>
		</div>	

    <div class="col-sm-8 col-md-9">
			<?php require 'inc/index-quicklinks.php'; ?>
		</div>	
	</div>

<?php get_footer(); ?>
