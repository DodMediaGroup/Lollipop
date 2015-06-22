<?php get_header(); ?>

	<section id="header-lollipop" class="js-resizing" data-resizing="9/15.5">
		<div class="header-parallax">
			<div data-mov="3" class="montana montana-1 parallax"><img class="js-img-to-svg" src="<?php bloginfo('template_url'); ?>/images/header/montana-1.svg"></div>
			<div data-mov="1" class="montana montana-2 parallax"><img class="js-img-to-svg" src="<?php bloginfo('template_url'); ?>/images/header/montana-2.svg"></div>
			<div data-mov="0" class="montana montana-3 parallax"><img class="js-img-to-svg" src="<?php bloginfo('template_url'); ?>/images/header/montana-3.svg"></div>

			<div data-mov="4" class="sol-content parallax">
				<div class="sol"><img src="<?php bloginfo('template_url'); ?>/images/header/sol.svg" class="js-img-to-svg"></div>
			</div>

			<div data-mov="4" class="nube parallax"><img src="<?php bloginfo('template_url'); ?>/images/header/nubes/nube-1.svg" class="js-img-to-svg"></div>
			<div data-mov="4" class="nube parallax"><img src="<?php bloginfo('template_url'); ?>/images/header/nubes/nube-2.svg" class="js-img-to-svg"></div>
			<div data-mov="4" class="nube parallax"><img src="<?php bloginfo('template_url'); ?>/images/header/nubes/nube-3.svg" class="js-img-to-svg"></div>
			<div data-mov="4" class="nube parallax"><img src="<?php bloginfo('template_url'); ?>/images/header/nubes/nube-4.svg" class="js-img-to-svg"></div>
			
			<div data-mov="2" class="lollipop-contetn parallax">
				<div class="lollipop"><img src="<?php bloginfo('template_url'); ?>/images/header/lollipop.svg" class="js-img-to-svg"></div>
			</div>
		</div>

		<?php include(TEMPLATEPATH . '/nav.php') ?>
	</section>
	<div class="content">
		<?php
			rewind_posts();
			query_posts('order=DESC&cat=2');

			if(have_posts()):
		?>
				<section class="slider js-resizing" data-resizing="9/20">
					<div class="fs_loader"></div>
			<?php
				while(have_posts()):
					the_post();
			?>
					<div class="slide">
						<article class="set-position" data-in="topRight" data-out="bottomLeft" data-position="0,70" data-delay="500" data-time="1000">
							<h1><?php the_title(); ?></h1>
							<div>
								<?php the_content(); ?>
							</div>
						</article>
					<?php
						if(has_post_thumbnail()):
							$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
					?>
						<div class="back" style="background-image:url('<?php echo $linkImg[0]; ?>');"></div>
					<?php
						endif;
					?>
					</div>
			<?php
				endwhile;
			?>
		<?php
			endif;
		?>
	</div>

	<?php
		$page = get_page_by_title( 'HORARIOS' );
		if ($page):
	?>
			<section id="horarios" class="section back-yellow change-menu" data-class="back-yellow">
				<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-watch.svg" alt="" class="js-img-to-svg"></span><?php echo $page->post_title; ?></h1>
				
				<div class="table">
					<div>
						<div class="wow bounceInLeft">
							<img src="<?php bloginfo('template_url'); ?>/images/horarios.svg" alt="Horarios" class="js-img-to-svg">
						</div>
					</div>
					<div>
						<?php echo $page->post_content; ?>
					</div>
				</div>
			</section>
	<?php
		endif;
	?>

	<section id="actividades" class="section back-blue back-grafics change-menu" data-class="back-blue">
		<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-star.svg" alt="" class="js-img-to-svg"></span>ACTIVIDADES</h1>
		
		<?php
			rewind_posts();
			query_posts('order=ASC&cat=3');

			if(have_posts()):
		?>
				<div class="content paneles">
			<?php
				while(have_posts()):
					the_post();
					if(has_post_thumbnail()):
						$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
			?>
					
					<article class="panel wow fadeInDown js-resizing" data-resizing="1/1" style="background-image: url('<?php echo $linkImg[0]; ?>')">
						<h1><?php the_title(); ?></h1>
					</article>
			<?php
					endif;
				endwhile;
			?>
				</div>
		<?php
			endif;
		?>

		</div>
		<div class="content map-activities">
			<div class="map">
				<img src="<?php bloginfo('template_url'); ?>/images/map-activities.svg" alt="Mapa Actividades" class="js-img-to-svg map-animate">
			</div>
			<div class="items">
				<ul>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/1.svg');"></span><div><p>1. Tarima</p></div></li>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/2.svg');"></span><div><p>2. Actividades Itinerantes</p></div></li>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/3.svg');"></span><div><p>3. Food Truck</p></div></li>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/4.svg');"></span><div><p>4. Bebidas</p></div></li>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/5.svg');"></span><div><p>5. Restaurantes</p></div></li>
					<li class="wow bounceInLeft"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/6.svg');"></span><div><p>6. Stands Play Market</p></div></li>
				</ul>
				<ul>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/7.svg');"></span><div><p>7. Tipis y Mesas</p></div></li>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/8.svg');"></span><div><p>8. Baño de hombres y Mujeres</p></div></li>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/9.svg');"></span><div><p>9. Medios Aliados</p></div></li>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/10.svg');"></span><div><p>10. Puesto de Policia y Enfermería</p></div></li>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/11.svg');"></span><div><p>11. Entrada Peatonal</p></div></li>
					<li class="wow bounceInRight"><span style="background-image: url('<?php bloginfo('template_url'); ?>/images/icon-activities/12.svg');"></span><div><p>12. Entrada Parqueadero</p></div></li>
				</ul>
			</div>
		</div>
	</section>

	<section id="tickets" class="section back-red change-menu" data-class="back-red">
		<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-ticket.svg" alt="" class="js-img-to-svg"></span>TICKETS</h1>
		<div class="content">
			<div class="button">
				<?php
					$page = get_page_by_title( 'LinksExternos',NULL,'post' );
					$linkTickets = get_post_meta($page->ID, 'TICKETS', false);
				?>
				<a href="<?php echo $linkTickets[0]; ?>" target="_blank">COMPRAR</a>
			</div>
			<div class="image wow bounceInLeft">
				<img src="<?php bloginfo('template_url'); ?>/images/tickets.svg" alt="Tickets" class="js-img-to-svg">
			</div>
		</div>
	</section>

<?php
	rewind_posts();
	query_posts('order=ASC&cat=4');

	if(have_posts()):
?>
		<section id="aliados" class="section back-purple back-grafics change-menu" data-class="back-purple">
			<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-people.svg" alt="" class="js-img-to-svg"></span>ALIADOS</h1>
			<div class="content paneles">
	<?php
		while(have_posts()):
			the_post();
			if(has_post_thumbnail()):
				$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
	?>
			
			<figure class="panel wow pulse js-resizing" data-resizing="1/1">
				<img src="<?php echo $linkImg[0]; ?>" alt="<?php the_title(); ?>">
			</figure>
	<?php
			endif;
		endwhile;
	?>
			</div>
		</section>
<?php
	endif;
?>

	<section id="feed" class="section back-red change-menu" data-class="back-red">
		<div id="preguntas" class="section">
			<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-preguntas.svg" alt="" class="js-img-to-svg"></span>PREGUNTAS FRECUENTES</h1>
			<div class="content">
				<div>
					<?php
						rewind_posts();
						query_posts('order=ASC&cat=6');

						if(have_posts()):
							$count = 0;
						?>
							<ul>
						<?php
							while(have_posts()):
								the_post();
								if($count < 3):
									$count++;
								?>
									<li class="wow bounceInLeft"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
								<?php
								endif;
							endwhile;
						?>
							</ul>
						<?php
						endif;
					?>
					<a class="link-more" href="<?php echo get_category_link(6); ?> ">+ Más Preguntas</a>
				</div>
				<figure class="wow bounceInDown">
					<img src="<?php bloginfo('template_url'); ?>/images/preguntas.svg" alt="Preguntas" class="js-img-to-svg">
				</figure>
			</div>
		</div>
		<div id="noticias" class="section">
			<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-noticias.svg" alt="News" class="js-img-to-svg"></span>NOTICIAS</h1>
			<div class="content">
				<article class="new">
					<?php
						rewind_posts();
						query_posts( 'order=DESC&cat=5' );

						if(have_posts()){
							$show = true;
							while(have_posts()){
								if($show){
									the_post();
									if(has_post_thumbnail()){
										$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
					?>
										<figure><div class="img" style="background-image: url('<?php echo $linkImg[0]; ?>')"></div></figure>
					<?php
									}
					?>
									<div class="article">
										<h1><?php the_title(); ?></h1>
										<?php the_excerpt(); ?>
										<a href="<?php the_permalink(); ?>" class="link-more">+ Leer más</a>
									</div>
					<?php
									$show = false;
								}
								else{
									break;
								}
							}
						}
					?>
				</article>
				<div class="share">
					<figure class="like wow wobble">
						<img src="<?php bloginfo('template_url'); ?>/images/like.svg" alt="Like" class="js-img-to-svg">
					</figure>
					<div class="social">
						<h2>COMPÁRTELO!!</h2>
						<?php $page = get_page_by_title( 'LinksExternos',NULL,'post' ); ?>
						<div>
							<?php $linkTickets = get_post_meta($page->ID, 'Facebook', false); ?>
							<a href="<?php echo $linkTickets[0]; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social/facebook.svg" alt="Facebook" class="js-img-to-svg"></a>
							
							<?php $linkTickets = get_post_meta($page->ID, 'Twitter', false); ?>
							<a href="<?php echo $linkTickets[0]; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social/twitter.svg" alt="Twitter" class="js-img-to-svg"></a>

							<?php $linkTickets = get_post_meta($page->ID, 'Google+', false); ?>
							<a href="<?php echo $linkTickets[0]; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social/google.svg" alt="Google+" class="js-img-to-svg"></a>

							<?php $linkTickets = get_post_meta($page->ID, 'Pinterest', false); ?>
							<a href="<?php echo $linkTickets[0]; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social/pinterest.svg" alt="Pinterest" class="js-img-to-svg"></a>

							<?php $linkTickets = get_post_meta($page->ID, 'Instagram', false); ?>
							<a href="<?php echo $linkTickets[0]; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/social/instagram.svg" alt="Instagram" class="js-img-to-svg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer() ?>