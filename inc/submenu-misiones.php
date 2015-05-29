<?php
/*
 * @file submenu-misiones.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:12:39 (-0600)
 */
?>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url(); ?>/category/misiones/alimentacion" class="list-group-item active"> */ ?>
		Alimentación
  </strong>
	<?php menu(misiones_alimentacion, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/misiones/compania" class="list-group-item active"> */ ?>
		Compañía
  </strong>
	<?php menu(misiones_compania, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/misiones/entretenimiento" class="list-group-item active"> */ ?>
		Entretenimiento
  </strong>
	<?php menu(misiones_entretenimiento, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/misiones/experimentacion" class="list-group-item active"> */ ?>
		Experimentación
  </strong>
	<?php menu(misiones_experimentacion, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
	<?php /* <a href="<?php echo site_url();?>/category/misiones/vestimenta" class="list-group-item active"> */ ?>
		Vestimenta
  </strong>
	<?php menu(misiones_vestimenta, 0); ?>
</div>
