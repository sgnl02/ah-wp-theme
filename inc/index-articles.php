<?php
/*
 * @file index-articles.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:10:44 (-0600)
 */
?>

<h1>Noticias</h1>

<?php
$args = array( 'posts_per_page' => 5, 'category_name' => 'noticias' );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	<div class="media">
	  <div class="media-body">
			<h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
					the_post_thumbnail( array('100', '100') );
			?>
			</a>
	  </div>
		<?php
			}
		?>
	</div>
<?php endforeach; 
wp_reset_postdata();?>
