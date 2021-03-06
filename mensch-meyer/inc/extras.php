<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package Mensch Meyer
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function mensch_meyer_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'mensch_meyer_body_classes' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and a 'Continue reading' link.
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
if ( ! function_exists( 'mensch_meyer_excerpt_more' ) ) :
    function mensch_meyer_excerpt_more( $more ) {
        $link = sprintf( '<a href="%1$s" class="more-link">%2$s</a>',
            esc_url( get_permalink( get_the_ID() ) ),
            /* translators: %s: Name of current post */
            sprintf( esc_html__( 'Continue reading %s', 'mensch-meyer' ), '<span class="screen-reader-text">' . get_the_title( get_the_ID() ) . '</span>' )
            );
        return ' &hellip; ' . $link;
    }
    add_filter( 'excerpt_more', 'mensch_meyer_excerpt_more' );
endif;

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function mensch_meyer_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'mensch_meyer_pingback_header' );
