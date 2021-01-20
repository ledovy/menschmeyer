<?php
/**
 * @package Mensch Meyer
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->
	<?php if ( mensch_meyer_has_post_thumbnail() ) : ?>
		<div class="entry-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'mensch-meyer-featured' ); ?></a>
		</div>
	<?php endif; ?>
	<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php mensch_meyer_posted_on(); ?>
			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="sep"> ~ </span><span class="comments-link">';
				comments_popup_link( esc_html__( 'Leave a comment', 'mensch-meyer' ), esc_html__( '1 Comment', 'mensch-meyer' ), esc_html__( '% Comments', 'mensch-meyer' ) );
				echo '</span>';
			} ?>
			<?php edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'mensch-meyer' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link"><span class="sep"> ~ </span>',
				'</span>'
			); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'mensch-meyer' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mensch-meyer' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post-## -->
