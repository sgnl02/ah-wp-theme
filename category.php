<?php
/*
 * Template Name: Category
 *
 * @file category.php
 * @author Stefan Jonker (programmer at stefanjonker dot nl)
 * @date 18-03-2015
 *
 * Created: Wed 18-03-2015, 20:06:19 (:-0600)
 * Last modified: Wed 18-03-2015, 23:39:34 (-0600)
 */
?>
<?php get_header(); ?>

		<div class="row show-mobile-banner">
				<?php require 'inc/banner.php'; ?>
		</div>

		<div class="row">
				<?php require 'inc/submenu-mobile.php'; ?>
		</div>

		<div class="row">	
      <div class="col-sm-4 col-md-3">
				<div class="menu-helper hide-on-mobile">
				<? require 'inc/submenu.php'; ?>
				</div>
			</div>

      <div class="col-sm-8 col-md-9">
				<?
				# Top categories
				mainPage('animal-heroes', 173);	
				mainPage('misiones', 175);
				mainPage('campanas', 177);
				mainPage('se-un-heroe', 179);
				mainPage('centro-de-prensa', 181);

				# Se Un Heroe
				/*
				mainPage('ciberactivista', 223);
				mainPage('donador', 225);
				MainPage('socio', 227);
				mainPage('voluntario', 229);
				*/

				# Animal Heroes
				/*
				mainPage('mision-vision-y-valores', 183);
				MainPage('nuestros-logros', 185);		
				MainPage('nuestro-trabajo', 188);
				MainPage('quines-somos', 190);
				*/

				# Misiones
				/*
				MainPage('alimentacion', 193);
				MainPage('compania', 197);
				MainPage('entretenimiento', 199);
				MainPage('experimentacion', 201);
				MainPage('vestimenta', 203);
				*/

				# Campanas
				/*
				mainPage('animales-de-compania', 205);
				MainPage('circos-sin-animales', 207);
				MainPage('cruelty-free', 211);
				MainPage('espectaculos-acuaticos', 213);
				MainPage('experimentacion-educativa', 215);
				MainPage('reconversion-de-zoos', 217);
				MainPage('toros', 219);
				MainPage('vegetarianismo', 221);
				*/

				# Agenda
				/*
				mainPage('agenda', 231);
				MainPage('comunicados', 233);
				MainPage('Contacto', 235);
				MainPage('Medios', 239);
				*/

				# Centro de Prensa
				/*
				mainPage('herramientas', 237);		
				*/
				?>
			</div>
		</div>

<?php get_footer(); ?>
