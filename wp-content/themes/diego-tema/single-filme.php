<?php get_header(); ?>

	<div class="container">
		<div class="row">
			<div class="col-xl-10">
				<main role="main">
					<!-- section -->
					<section>
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<div class="container">
					<div class="row">
						<!-- article -->
						<article id="post-<?php the_ID(); ?>" <?php post_class('article-single-filme'); ?>>

							<div class="col-xl-4">
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
										<?php the_post_thumbnail(); // Fullsize image for the single post ?>
									</a>
								<?php endif; ?>
								<!-- /post thumbnail -->
							</div>

							<div class="col-xl-8">
								<!-- post title -->
								<h1>
									<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
								</h1>
								<!-- /post title -->

								<!-- post details -->
								<span class="date">Adicionado em: <?php the_time('d \d\e F \d\e Y'); ?></span> | 
								<span class="author"> por: <?php the_author_posts_link(); ?></span>			
								<!-- /post details -->

								<!-- detalhes do filme -->
								<p>
									Diretor: <?php echo get_field('diretor') ?> | 
									Duração: <?php echo get_field('duracao') ?> | 
									<?php echo get_the_term_list( $post->ID, 'categoria-filmes', 'Categorias: ', ', ') ?> | 
									Classificação: 
									<?php
										$tags= get_the_terms( $id, 'idade');
										foreach($tags as $tag): 
									?>
										<a class="link-classificacao" href="<?php echo get_tag_link( $tag->term_id ) ?>" target="_self">
											<?php echo $tag->name ?>
										</a>
									<?php endforeach;?>	
								<p>			
								<h3>Sinopse:</h3> 
								<?php echo the_content(); // Dynamic Content ?>		

								<?php
									if(is_user_logged_in()){
								?>
									<button>
										<?php edit_post_link('Editar conteudo'); // Always handy to have Edit Post Links available ?>
									</button>
								<?php
									}
								?>
							</div>
						</article>
						<!-- /article -->
					</div>
					</div>
					<?php endwhile; ?>

					<?php else: ?>

						<!-- article -->
						<article>

							<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

						</article>
						<!-- /article -->

					<?php endif; ?>

					</section>
					<!-- /section -->
				</main>
			</div>
			<div class="col-xl-2">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
