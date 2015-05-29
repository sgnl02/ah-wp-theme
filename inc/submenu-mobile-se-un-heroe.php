<?php
/*
 * @file submenu-mobile-se-un-heroe.php
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
  		<a id="submenu-ciberactivista" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
  	    Ciberactivista
  	    <span class="caret pull-right"></span>
  	  </a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-ciberactivista">
				<?php menu(seunheroe_ciberactivista, 3); ?>
			</ul>
		</li>

		<li class="dropdown">
  		<a id="submenu-donador" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
  	    Donador
  	    <span class="caret pull-right"></span>
  	  </a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-donador">
				<?php menu(seunheroe_donador, 3); ?>
			</ul>
		</li>

  	<li class="dropdown">
  		<a id="submenu-socio" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
  	    Socio
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-socio">
				<?php menu(seunheroe_socio, 3); ?>
  	  </ul>
  	</li>

		<li class="dropdown">
  		<a id="submenu-voluntario" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
  	    Voluntario
  	    <span class="caret pull-right"></span>
  	  </a>
			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdown-voluntario">
				<?php menu(seunheroe_voluntario, 3); ?>
			</ul>
		</li>
   </ul>
</div>
