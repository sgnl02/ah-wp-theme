<?php
/*
 * @file category-thumbnail.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:10:44 (-0600)
 */
?>

<?php if ( has_post_thumbnail() ) { ?>
<div class="media-right media-middle">
	<a href="<?php the_permalink(); ?>">
	<?php the_post_thumbnail( array('100', '100') ); ?>
	</a>
</div>
<?php } ?>
