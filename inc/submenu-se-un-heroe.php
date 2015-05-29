<?php
/*
 * @file submenu-se-un-heroe.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:15:17 (-0600)
 */
?>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url(); ?>/category/se-un-heroe/socio" class="list-group-item active"> */ ?>
		Socio
  </strong>
	<?php menu(seunheroe_socio, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/se-un-heroe/donador" class="list-group-item active"> */ ?>
		Donador
  </strong>
	<?php menu(seunheroe_donador, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/se-un-heroe/voluntario" class="list-group-item active"> */ ?>
		Voluntario
  </strong>
	<?php menu(seunheroe_voluntario, 0); ?>
</div>

<div class="list-group">
	<strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/se-un-heroe/ciberactivista" class="list-group-item active"> */ ?>
		Ciberactivista
  </strong>
	<?php menu(seunheroe_ciberactivista, 0); ?>
</div>
