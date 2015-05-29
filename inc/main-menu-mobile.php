<?php
/*
 * @file main-menu-mobile.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:10:44 (-0600)
 */
?>

<div class="wrapper-mobile">
	<nav class="navbar navbar-default navbar-mobile show-on-mobile">	
	  <div class="container-fluid clearfix">
			<a class="navbar-brand show-on-mobile" href="<?php echo home_url(); ?>">
				<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/img/logo-mobile-b2.jpg" 
				width="46" height="35" alt="Animal Heroes." class="logo-small">
			</a>

		 	<ul class="nav navbar-nav nav-main-mobile show-on-mobile clear-both">
				<li class="nav-item-main-mobile"><a href="#" title="Main Menu" data-toggle="collapse" data-target="#collapse-main-menu">
					<?php _e( 'Menu', 'main menu'); ?> 
					<span class="caret"></span>
				</a></li>
				<li class="nav-item-main-mobile"><?php menu(main_menu_dona, 4); ?></li>
			</ul>

			<form role="search" method="get" id="searchform" 
			class="navbar-form pull-right show-on-mobile mobile-search-form" action="<?php echo home_url( '/' ); ?>">
				<input type="text" class="form-control mobile-search-input" 
				placeholder="Buscar" value="" name="s" id="s">

				<button type="submit" 
					class="btn btn-default mobile-search-button pull-right">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					<span class="sr-only">Buscar</span>
				</button>
			</form>
		</div>

		<div class="collapse" id="collapse-main-menu">
		  <div class="container-fluid">
				<ul id="menu-main" class="nav navbar-nav">
					<?php menu(main_menu_mobile, 1); ?>
					<?php menu(main_menu_tienda, 1); ?>
				</ul>
			</div>
		</div>
	</nav>
</div>
