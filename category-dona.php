<?php get_header(); ?>

<?php
/*
 * @file category-dona.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:29:52 (-0600)
 */
?>

	<div class="row show-mobile-banner">
		<?php require 'inc/banner-inicio.php'; ?>
	</div>
	
	<?php require 'inc/category-submenu.php'; ?>

		<div class="col-sm-8 col-md-9">
			<a href="#" class="btn btn-lg btn-info show-on-mobile pull-right" role="button"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Dona ahora</a>

	    <h1><?php echo get_the_title(460); ?></h1>

	    <p><?php echo get_post_field('post_content', 460); ?></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>
