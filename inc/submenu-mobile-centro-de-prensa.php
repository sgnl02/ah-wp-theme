<?php
/*
 * @file submenu-mobile-centro-de-prensa.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:15:17 (-0600)
 */
?>

<div class="collapse" id="collapse-submenu" aria-expanded="true">
	<ul class="nav navbar-nav mobile-submenu show-on-mobile">
		<?php menu(centrodeprensa_main, 2); ?>
	</ul>

	<ul class="nav navbar-nav mobile-submenu show-on-mobile">
  	<li class="dropdown">
  	  <a id="submenu-herramientas" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
  	    Herramientas
  	    <span class="caret pull-right"></span>
  	  </a>
  	  <ul class="dropdown-menu" role="menu" aria-labelledby="submenu-herramientas">
				<?php menu(centrodeprensa_herramientas, 2); ?>
			</ul>
		</li>
   </ul>
</div>
