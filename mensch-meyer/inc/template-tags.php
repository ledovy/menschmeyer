<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Mensch Meyer
 */

if ( ! function_exists( 'mensch_meyer_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function mensch_meyer_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	if ( is_sticky() ) {
		$time_string = esc_html__( 'Featured', 'mensch-meyer' );
	}
	else {
		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
	}


	wp_kses_post( printf( __( '<span class="posted-on">%1$s</span><span class="byline">%2$s</span>', 'mensch-meyer' ),
		sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		),
		sprintf( '<span class="author vcard"><span class="sep"> ~ </span><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		)
	) ); // WPCS: XSS OK.
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function mensch_meyer_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'mensch_meyer_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'mensch_meyer_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so mensch_meyer_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so mensch_meyer_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in mensch_meyer_categorized_blog.
 */
function mensch_meyer_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'mensch_meyer_categories' );
}
add_action( 'edit_category', 'mensch_meyer_category_transient_flusher' );
add_action( 'save_post',     'mensch_meyer_category_transient_flusher' );
