<?php get_header(); ?>

	<div class="row show-mobile-banner">
		<?php require 'inc/banner.php'; ?>
	</div>

	<div class="row">
		<div class="col-md-12">
			<?php require 'inc/submenu-mobile.php'; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-4 col-md-3">
			<div class="menu-helper hide-on-mobile">
			<? require 'inc/submenu.php'; ?>
			</div>
		</div>
		
		<div class="col-sm-8 col-md-9">

			<h1>Videoblog</h1>

 			 <?php
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 0;
			  $args = array( 'category_name'=>'videoblog', 'posts_per_page' => 5, 'paged' => $paged );
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

					<?php
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					?>
				  <div class="media-right media-middle">
						<a href="<?php the_permalink(); ?>">
						<?php 
								the_post_thumbnail( array('64', '64') );
						?>
						</a>
				  </div>
					<?php
						}
					?>
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
