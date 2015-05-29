<?php
/*
 * @file submenu-inicio.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:12:39 (-0600)
 */
?>

<div class="list-group">
  <strong class="list-group-item active">
		Actividades
  </strong>
	<?php menu(inicio_actividades, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
		Multimedia
  </strong>
	<?php menu(inicio_multimedia, 0); ?>
</div>

<div class="list-group">
  <a href="<?php echo site_url(); ?>/category/noticias" class="list-group-item active">
		Noticias
  </a>
</div>

<div class="list-group">
  <strong class="list-group-item active">
		Opinión
  </strong>
	<?php menu(inicio_opinion, 0); ?>
</div>

<div class="list-group">
  <strong class="list-group-item active">
		Publicaciones
  </strong>
	<?php menu(inicio_publicaciones, 0); ?>
</div>
