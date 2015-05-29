<?php
 /*
 * Template Name: Single page
 *
 * @file single.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:42:32 (-0600)
 */
?>
<?php get_header(); ?>

	<div class="row show-mobile-banner">
		<?php require 'inc/banner.php'; ?>
	</div>

	<div class="row">
		<?php require 'inc/submenu-mobile.php'; ?>
	</div>

	<div class="row">
		<div class="col-sm-4 col-md-3">
			<div class="menu-helper hide-on-mobile">
			<? require 'inc/submenu.php'; ?>
			</div>
		</div>

    <div class="col-sm-8 col-md-9">	
		<?php while ( have_posts() ) : the_post(); ?>
			<h1><?php echo get_the_title(); ?></h1>

			<?php
			/* 
			 * If viewing article from the frontpage, show date
			 */

			$category = get_the_category(); 
			$category_parent_id = $category[0]->category_parent;
			
			if ( $category_parent_id != 0 ) {
			    $category_parent = get_term( $category_parent_id, 'category' );
			    $category_top_slug = $category_parent->slug;
			} else {
			    $category_top_slug = $category[0]->slug;
			}

			$page_slug = basename(get_permalink());			

			/* if() { echo 'ja'; } */

			if($category_top_slug === "inicio" && $page_slug !== 'boletin-informativo') {
			?>

			<p>
				<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					<?php echo $gmt_timestamp = get_post_time('d-m-y', '', false); ?>
				</span>
			</p>

				<?php if(has_tag()) { ?>
					<p>
						<span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
						<?php the_tags(); ?>
					</p>
				<?php } ?>

			<?php } ?>

			<?php
				if ( has_post_thumbnail() ) { 
								
					echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute( 'echo=0' ) . '">';				
						the_post_thumbnail( 'medium', array( 'class' => 'img-responsive' ) );
					echo '</a>';						
			?>

			<?php
				}
			?>

				<div class="content">
					<?php echo the_content(); ?>
					<?php echo $img_src=get_post_meta($post->ID,'post-image',$single=true); ?>
				</div>
			</div>

			<?php
					/*
					if ( comments_open() || get_comments_number() ) :
						comments_template('/comments.php');
					endif;
					*/
			?>
		</div>
		<?php endwhile; // end of the loop. ?>
	</div>

<?php get_footer(); ?>
