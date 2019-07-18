<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="">

<div class="conteudo">
	<main>
		<section class="meio">
			<div class="container">
				<div class="row">
					<aside class="barra-lateral col-md-3">Barra Lateral</aside>
					<div class="noticias col-md-9">
						<?php
						//Se houver algum post
						if (have_posts()) :
							//Enquanto houver algum post, chame o post de determinada maneira
							while (have_posts()) : the_post();
						?>
						<?php get_template_part('content', get_post_format()); ?>
						<?php
						endwhile;
						else: 
						?>
						<p>Não tem nada ainda para mostrar</p>
						<?php
						endif; 
						?>
					</div>
				</div> 
			</div>
		</section>
		<section class="mapa container">Mapa</section>
	</main>
</div>

<?php get_footer(); ?>
