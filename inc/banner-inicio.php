<?php
/*
 * @file banner-inicio.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:07:52 (-0600)
 */
?>

<div class="col-md-12 mobile-banner-inicio">
	<?php require 'banner-button.php'; ?>
	
	<?php if(is_front_page()) { ?>
		<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/banner-inicio.jpg" 
		class="img-responsive under-menu show-on-tablet" width="1200" height="221" alt="Banner">
	<?php } else { ?>
		<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/banner-inicio.jpg" 
		class="img-responsive under-menu hide-on-mobile" width="1200" height="221" alt="Banner">
	<?php } ?>
</div>
