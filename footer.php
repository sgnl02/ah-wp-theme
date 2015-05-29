</div>
<?php
/*
 * @file footer.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:40:32 (-0600)
 */
?>
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-top">
			<p><?php echo get_post_field('post_content', 445); ?></p>
		</div>
		<div class="footer-bottom">
			<a target="_blank" href=""><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-youtube.png" width="32" height="32" alt="YouTube." class="footer-logo pull-right"></a>
			<a target="_blank" href=""><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-twitter.png" width="32" height="32" alt="Twitter." class="footer-logo pull-right"></a>
			<a target="_blank" href=""><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-facebook.png" width="32" height="32" alt="Facebook." class="footer-logo pull-right"</a>
			<a target="_blank" href=""><img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-flickr.png" width="32" height="32" alt="Flickr." class="footer-logo pull-right"></a>

			<p><?php echo get_post_field('post_content', 447); ?></p>
		</div>
	</footer>

<?php wp_footer(); ?>

	<script>
	if (document.documentElement.clientWidth <= 767) {
	/*
		el = document.querySelector(".mobile-banner-inicio");
		el.style.backgroundImage = "url('wp-content/themes/ah/img/banner-inicio.jpg')";
	*/
	}
	</script>

</body>
</html>
