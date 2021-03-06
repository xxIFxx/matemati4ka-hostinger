<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package matemati4ka
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">
				<div class="row ksa-posts">
					<div class="col-lg-8 col-md-8 col-sm-8">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
								<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								//the_archive_description( '<div class="archive-description">', '</div>' ); ?>
							</header><!-- .page-header -->

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', get_post_format() );
							endwhile;
							if ( function_exists( 'wp_pagenavi' ) ) : wp_pagenavi(); endif;
						//	the_posts_navigation();
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif; ?>

					</div><!-- col-lg-8 -->
					<?php get_sidebar(); ?>
				</div><!-- .row -->
			</div> <!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
