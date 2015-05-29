<?php
/*
 * @file submenu-centro-de-prensa.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:12:39 (-0600)
 */
?>

<div class="list-group">
	<?php menu(centrodeprensa_main, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url(); ?>/category/centro-de-prensa/herramientas" class="list-group-item active"> */ ?>
		Herramientas
  </strong>
	<?php menu(centrodeprensa_herramientas, 0); ?>
</div>


