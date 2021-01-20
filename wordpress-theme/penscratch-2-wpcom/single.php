<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Mensch Meyer
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation( array( 'prev_text' => '<span class="meta-nav">' . esc_html__( '&lsaquo; Previous', 'mensch-meyer' ) . '</span>%title', 'next_text' => '<span class="meta-nav">' . esc_html__( 'Next &rsaquo;', 'mensch-meyer' ) . '</span>%title' ) ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
