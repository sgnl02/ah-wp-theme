<?php
/*
 * @file main-menu.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:10:44 (-0600)
 */
?>

	<nav class="navbar navbar-default navbar-main hide-on-mobile">	
	  <div class="container-fluid">
			<ul class="nav navbar-nav">
				<?php /* <li><a href="<?php echo home_url(); ?>">Inicio</a></li> */ ?>
				<?php menu(main_menu, 1); ?>
				<li class="donate"><?php menu(main_menu_dona, 4); ?></li>
			</ul>
<?php
/*
				<li><a href="<?php echo home_url(); ?>">Inicio</a></li>																				
				<li><a href="<?php echo esc_url( $link_animalheroes ); ?>" title="Animal Heroes">Animal Heroes</a></li>
				<li><a href="<?php echo esc_url( $link_misiones ); ?>" title="Misiones">Misiones</a></li>																				
				<li><a href="<?php echo esc_url( $link_campanas ); ?>" title="Campanas">Campanas</a></li>																				
				<li><a href="<?php echo esc_url( $link_se_un_heroe ); ?>" title="Se Un Heroe">Se Un Heroe</a></li>																				
				<li><a href="<?php echo esc_url( $link_centro_de_prensa ); ?>" title="Centro de Prensa">Centro de Prensa</a></li>																				
*/
?>
		</div>
	</nav>
