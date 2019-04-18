
<?php /* Template Name: Filmes */ ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section id="section-movies">
                <div class="container">
                <div class="row">

                    <h1 class="title-page-filmes">
                        <?php the_title(); ?>
                    </h1>
                    
                            
                        
                    <?php 
                    $newsArgs = array( 'post_type' => 'filme', 'posts_per_page' => 4);                   
                    $field_name="Filme";                       
                        $newsLoop = new WP_Query( $newsArgs );                  
                                            
                        while ( $newsLoop->have_posts() ) : $newsLoop->the_post();              ?>
                    <div class="col-6 col-xl-4">
                        <div class="card">
                                <div class="poster-movie-small">                            
                                    <div class="classificacao">
                                        <?php
                                            $tags= get_the_terms( $id, 'idade');
                                            foreach($tags as $tag): 
                                        ?>
                                            <span class="<?php echo $tag->name ?>">
                                                <?php echo $tag->name ?>
                                            </span>
                                        <?php endforeach;?>
                                    </div>
                                    <?php $attr = array(
                                        'src'   => $src,
                                        'alt' => "Card image cap",
                                        'class' => " card-img card-img-top ",
                                    ); ?>
                                    <?php the_post_thumbnail('',$attr); // Fullsize image for the single post ?>
                                </div> <!-- END poster-movie-small -->
                                <div class="card-body">                               
                                    <h3 class="title-movie">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                    <!-- detalhes do filme -->
                                    <p class="desc-card">
                                        <?php echo get_the_term_list( $post->ID, 'categoria-filmes', '', ', ') ?>                                	
                                    </p>
                                </div>
                        </div>
                    </div>
                    <?php endwhile; ?>

                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <!-- article -->
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                        <?php the_content(); ?>

                        <?php comments_template( '', true ); // Remove if you don't want comments ?>

                        <br class="clear">
                        
                    </article>
                    <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>

                    <!-- article -->
                    <article>

                        <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

                    </article>
                    <!-- /article -->

                <?php endif; ?>
                </div>
            </div>
		</section>
		<!-- /section -->
	</main>
        
<?php get_footer(); ?>
