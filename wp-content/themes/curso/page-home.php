<?php get_header(); ?>

<div class="conteudo">
	<main>
		<section class="slide">
			<div class="container">Slider</div>
		</section>
		<section class="servicos">
			<div class="container">Serviços</div>
		</section>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-3">
						<?php get_sidebar('home'); ?>
					</aside>
					<div class="noticias col-md-9">
						<div class="row">
							<?php 

								$destaque = new WP_Query('post_type=post&posts_per_page=1&cat=4,12');

								if($destaque->have_posts()):
									while($destaque->have_posts()):
										$destaque->the_post();
							?>
								<div class="col-md-12">
									<?php get_template_part('content', 'destaque');  ?>
								</div>

							<?php
									endwhile;
									wp_reset_postdata();
								endif;
							?>

							<?php 
								$args = array(
									'post_type'			=>	'post',
									'posts_per_page'	=>	2,
									'category__not_in'	=>	array(8),
									'category__in'		=>	array(4,12),
									'offset'			=>	1,
								);

								$secundarias = new WP_Query($args);

								if($secundarias->have_posts()):
									while($secundarias->have_posts()):
										$secundarias->the_post();
							?>
								<div class="col-md-6">
									<?php get_template_part('content', 'secundaria');  ?>
								</div>

							<?php
									endwhile;
									wp_reset_postdata();
								endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="mapa">
			<div class="container">Mapa</div>
		</section>
	</main>	
</div>

<?php get_footer(); ?>
