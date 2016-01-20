<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//

/* for testing if a page is a child of an existing page;
	Usage: if (is_tree('2')) { 
	// stuff 
	} // (this is for child of page id '2' )
From http://tinyurl.com/9e6q8us
*/

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
	global $post;         // load details about this page
	if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
	else 
               return false;  // we're elsewhere
};

/**
 * Custom class for the WP 'body_class()' function
 * updated: 4/15/10
 */
function dbdb_body_classes($classes) {
    global $wp_query;
    
    // if there is no parent ID and it's not a single post page, category page, or 404 page, give it
    // a class of "parent-page"
    if( $wp_query->post->post_parent < 1  && !is_single() && !is_archive() && !is_404() ) {
        $classes[] = 'parent-page';
    };
    
    // if the page/post has a parent, it's a child, give it a class of its parent name
    if($wp_query->post->post_parent > 0 ) {
        $parent_title = get_the_title($wp_query->post->post_parent);
        $parent_title = preg_replace('#\s#','-', $parent_title);
        $parent_title = strtolower($parent_title);
        $classes[] = 'parent-pagename-'.$parent_title;
    };
    
    // add a class = to the name of post or page
    $classes[] = $wp_query->queried_object->post_name;
    
    return array_unique($classes);
};
add_filter('body_class','dbdb_body_classes');

/* add another sidebar */
register_sidebar( array(
		'name' => __( 'Secondary Sidebar', 'twentyeleven' ),
		'id' => 'sidebar-6',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
/* Remove link from 'posted on' date */
function twentyeleven_posted_on() {
        printf( __( '<span class="sep">Posted on </span><time class="entry-date" datetime="%3$s" pubdate>%4$s</time><span class="by-author"> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a></span></span>', 'twentyeleven' ),
                esc_url( get_permalink() ),
                esc_attr( get_the_time() ),
                esc_attr( get_the_date( 'c' ) ),
                esc_html( get_the_date() ),
                esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                esc_attr( sprintf( __( 'View all posts by %s', 'twentyeleven' ), get_the_author() ) ),
                get_the_author()
        );
}