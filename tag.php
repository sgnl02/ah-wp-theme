<?php
 /*
 * Template Name: Single page
 * 
 * @file tag.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Thu 19-03-2015, 17:46:38 (-0600)
 */
?>
<?php get_header(); ?>

	<div class="row show-mobile-banner">
		<?php require 'inc/banner-inicio.php'; ?>
	</div>

	<div class="row">
		<?php require 'inc/submenu-mobile-inicio.php'; ?>
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="menu-helper hide-on-mobile">
			<? require 'inc/submenu-inicio.php'; ?>
			</div>
		</div>

    <div class="col-md-9">	
			<h1>Tags</h1>
			<?php
				$tag = single_tag_title('', false);
				new WP_Query(array('posts_per_page'=>-1, 'tag' => $tag));
			?>

			<?php while (have_posts()) : the_post(); ?>
				<a href="<?php the_permalink() ?>">
				  <h3><?php the_title(); ?></h3>
				</a>
			
				<p><?php the_excerpt(); ?></p>
			<?php endwhile; ?>

		</div>
	</div>

<?php get_footer(); ?>
