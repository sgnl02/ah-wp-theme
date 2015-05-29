<?php
/*
 * @file submenu-mobile-inicio.php
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
    	  <a id="submenu-actividades" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
    	    Actividades
    	    <span class="caret pull-right"></span>
    	  </a>
    	  <ul class="dropdown-menu" role="menu" aria-labelledby="submenu-actividades">
					<?php menu(inicio_actividades, 3); ?>
    	  </ul>
    	</li>

    	<li class="dropdown">
    	  <a id="submenu-multimedia" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
    	    Multimedia
    	    <span class="caret pull-right"></span>
    	  </a>
    	  <ul class="dropdown-menu" role="menu" aria-labelledby="submenu-multimedia">
					<?php menu(inicio_multimedia, 3); ?>
    	  </ul>
    	</li>
			<li>
				<a href="<?php echo site_url(); ?>/category/noticias" role="button" aria-haspopup="true">Noticias</a>
			</li>

    	<li class="dropdown">
    	  <a id="submenu-opinion" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
    	    Opinión
    	    <span class="caret pull-right"></span>
    	  </a>
    	  <ul class="dropdown-menu" role="menu" aria-labelledby="submenu-opinion">
					<?php menu(inicio_opinion, 3); ?>
    	  </ul>
    	</li>

    	<li class="dropdown">
    	  <a id="submenu-publicaciones" href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
    	   	Publicaciones
    	    <span class="caret pull-right"></span>
    	  </a>
    	  <ul class="dropdown-menu" role="menu" aria-labelledby="submenu-publicaciones">
					<?php menu(inicio_publicaciones, 3); ?>
    	  </ul>
    	</li>
     </ul>
	</div>
