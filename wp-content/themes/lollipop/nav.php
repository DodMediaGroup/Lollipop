		<nav class="principal-menu default">
			<a class="logo" href="<?php bloginfo('wpurl'); ?>">
				<img class="js-img-to-svg background" src="<?php bloginfo('template_url'); ?>/images/background-logo.svg">
				<img src="<?php bloginfo('template_url'); ?>/images/logo-menu.svg" alt="LOLLIPOP">
			</a>
			<h1 class="title_menu">
				MENÚ
				<span>
					<i></i>
					<i></i>
					<i class="hidden"></i>
				</span>
			</h1>
			<ul class="content">
				<li class="item back-yellow"><a href="<?php bloginfo('wpurl'); ?>#horarios">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-watch.svg" alt="" class="js-img-to-svg"></span>HORARIOS
				</a></li>
				<li class="item back-blue"><a href="<?php bloginfo('wpurl'); ?>#actividades">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-star.svg" alt="" class="js-img-to-svg"></span>ACTIVIDADES
				</a></li>
				<li class="item back-red"><a href="<?php bloginfo('wpurl'); ?>#tickets">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-ticket.svg" alt="" class="js-img-to-svg"></span>TICKETS
				</a></li>
				<li class="item back-purple"><a href="<?php bloginfo('wpurl'); ?>#aliados">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-people.svg" alt="" class="js-img-to-svg"></span>ALIADOS
				</a></li>
				<li class="item back-yellow"><a href="<?php bloginfo('wpurl'); ?>#preguntas">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-preguntas.svg" alt="" class="js-img-to-svg"></span>PREGUNTAS FRECUENTES
				</a></li>
				<li class="item show-smartphone back-blue"><a href="<?php bloginfo('wpurl'); ?>#noticias">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-noticias.svg" alt="" class="js-img-to-svg"></span>NOTICIAS
				</a></li>
				<li class="item show-smartphone back-red"><a href="<?php bloginfo('wpurl'); ?>#ubicacion">
					<span><img src="<?php bloginfo('template_url'); ?>/images/icon-map.svg" alt="" class="js-img-to-svg"></span>UBICACION
				</a></li>


				<?php $page = get_page_by_title( 'LinksExternos',NULL,'post' ); ?>

				<?php $linkTickets = get_post_meta($page->ID, 'Facebook', false); ?>
				<li class="social"><a href="<?php echo $linkTickets[0]; ?>" target="_blank" style="background-image:url('<?php bloginfo('template_url'); ?>/images/facebook-menu.svg');"></a></li>

				<?php $linkTickets = get_post_meta($page->ID, 'Twitter', false); ?>
				<li class="social"><a href="<?php echo $linkTickets[0]; ?>" target="_blank" style="background-image:url('<?php bloginfo('template_url'); ?>/images/twitter-menu.svg');"></a></li>
			</ul>
		</nav>