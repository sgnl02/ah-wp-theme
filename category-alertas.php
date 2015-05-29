<?php get_header(); ?>

<?php
/*
 * @file category-alertas.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Tue 24-03-2015, 12:57:50 (-0600)
 */
?>

<?php require 'inc/category-banner.php'; ?>

<?php require 'inc/category-submenu.php'; ?>
		
		<div class="col-sm-8 col-md-9">

			<h1>Alertas</h1>

 			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
				$args = array( 'category_name'=>'alertas', 'posts_per_page' => 10, 'paged' => $paged );
				$loop = new WP_Query( $args );

				query_posts($args);  

				while ( $loop->have_posts() ) : $loop->the_post(); 
			?>

				<div class="media">
				  <div class="media-body">
							<h2 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<a href="<?php the_permalink(); ?>" class="media-time">
								<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
								<?php echo $gmt_timestamp = get_post_time('d-m-y', '', false); ?>
							</a>

							<p>
								<a href="<?php the_permalink(); ?>" class="media-link">
								<?php echo wp_trim_excerpt(); ?>
								</a>
							</p>
					</div>

<?php require 'inc/category-thumbnail.php'; ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		  <ul class="pager">
				<?php pagination(); ?>
		  </ul>
		</div>
	</div>
</div>

<?php get_footer(); ?>
