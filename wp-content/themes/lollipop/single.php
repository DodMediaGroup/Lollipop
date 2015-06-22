<?php get_header(); ?>

	<section id="header-lollipop" class="not-header">
		<?php include(TEMPLATEPATH . '/nav.php') ?>
	</section>

<?php
	$idPost = 0;

	rewind_posts();
	if(have_posts()):
		while (have_posts()):
			the_post();

			$idPost = get_the_id();
			$title = get_the_category();
			$imageTitle = explode(' ', $title[0]->name);
			$imageTitle = $imageTitle[0];
?>

	<section id="single-page" class="section article-view back-red change-menu" data-class="back-red">
		<h1 class="title"><span><img src="<?php bloginfo('template_url'); ?>/images/icon-<?php echo strtolower($imageTitle); ?>.svg" alt="" class="js-img-to-svg"></span><?php echo $title[0]->name; ?></h1>

		<div class="content">
			<article class="article">
				<?php
					if(has_post_thumbnail()):
						$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
				?>
					<figure><img src="<?php echo $linkImg[0]; ?>" alt="<?php the_title(); ?>"></figure>
				<?php endif; ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		</div>
	</section>
<?php
		endwhile;
	endif;
?>

	<section id="posts-related" class="section back-red change-menu" data-class="back-red">
		<div class="content paneles">
			<?php
				rewind_posts();
				query_posts( 'order=DESC&cat=5' );

				if(have_posts()){
					$countPost = 0;
					while(have_posts() && $countPost < 3){
						the_post();
						if($idPost != get_the_id()){ ?>
							
						<div class="panel wow fadeInDown">
							<article>
								<?php
									if(has_post_thumbnail()){
										$linkImg = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
									?>
										<div class="img js-resizing" data-resizing="1/1" style="background-image:url(<?php echo $linkImg[0]; ?>)"></div>
									<?php }
								?>
								<h1><?php the_title(); ?></h1>
								<?php the_excerpt(); ?>
								<a href="<?php the_permalink(); ?>">+ Leer más</a>
							</article>
						</div>

						<?php
							$countPost++;
						}
					}
				}
			?>
		</div>
	</section>

<?php get_footer() ?>