<?php
/**
 * Template Name: Full Width
 *
 *
 * 
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package usBasske
 */

get_header(); ?>

	<div id="primary" class="content-area front-page-content">
		<div id="sliderwrapper">
			<?php putRevSlider("slider1", "homepage") ?>
		</div>	
		<main id="main" class="site-main" role="main">				
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
