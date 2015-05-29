<?php
/*
 * @file submenu-mobile-misiones.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:15:17 (-0600)
 */
?>

<div class="collapse" id="collapse-submenu" aria-expanded="true">
	<ul class="nav navbar-nav mobile-submenu show-on-mobile">
  	<li class="dropdown">
  		<a id="submenu-alimentacion" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
				Compañía
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="alimentacion">
				<?php menu(misiones_alimentacion, 3); ?>
  	  </ul>
  	</li>

  	<li class="dropdown">
  		<a id="submenu-entretenimiento" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
				Entretenimiento
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="entretenimiento">
				<?php menu(misiones_entretenimiento, 3); ?>
  	  </ul>
  	</li>

  	<li class="dropdown">
  		<a id="submenu-experimentacion" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
				Experimentación
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="experimentacion">
				<?php menu(misiones_experimentacion, 3); ?>
  	  </ul>
  	</li>

  	<li class="dropdown">
  		<a id="submenu-vestimenta" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
				Vestimenta
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="vestimenta">
				<?php menu(misiones_vestimenta, 3); ?>
  	  </ul>
  	</li>
   </ul>
</div>
