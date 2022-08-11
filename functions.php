<?php 

/* Setup */
function flyingcat_setup(){
	/* Let WordPress manage the document title*/ 
	add_theme_support('title-tag');

	/* Enable support for Post Thumbnails */
	add_theme_support('post-thumbnails');

	/* Enable support for Post Formats */
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	));

	

	/* Register location of menus */



	register_nav_menus(array(
		'primary' => __('Menu Top'),
		'secondary' => __('Menu Footer'),
		'legal' => __('Menu Legal'),

	));
}
add_action('after_setup_theme','flyingcat_setup');


/* Add styles */
function flyingcat_enqueue_style(){
	wp_enqueue_style('flyingcat-style', get_stylesheet_uri(), 1.0, 'all');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/menu.js', ['jquery'] );
}
add_action('wp_enqueue_scripts','flyingcat_enqueue_style');


// Register Sidebars

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Module Customization',
		'menu_title'	=> 'Module Customization',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

if ( ! function_exists( 'flyingcat_footer_area' ) ) {


function flyingcat_footer_area() {

	register_sidebar( $args );

	$args = array(
		'id'            => 'wa_footer_1',
		'name'          => __( 'Get in touch', 'flyingcat' ),
		'description'   => __( 'Column 1', 'flyingcat' ),
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'wa_footer_2',
		'name'          => __( 'See also', 'flyingcat' ),
		'description'   => __( 'Column 2', 'flyingcat' ),
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'wa_footer_3',
		'name'          => __( 'Legal stuff', 'flyingcat' ),
		'description'   => __( 'Column 3', 'flyingcat' ),
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'wa_footer_4',
		'name'          => __( 'Follow me', 'flyingcat' ),
		'description'   => __( 'Column 4', 'flyingcat' ),
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	);
	register_sidebar( $args );

}

add_action( 'widgets_init', 'flyingcat_footer_area' );

}

function enable_threaded_comments(){
 if (!is_admin()) {
  if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
   wp_enqueue_script('comment-reply');
  }
}
add_action('get_header', 'enable_threaded_comments');

/* Customized comments */
function flyingcat_comment($comment, $args, $depth){
?>
<li id="comment-<?php comment_ID(); ?>">
	<article class="comment">
		<div class="comment-author">
			<?php
				echo get_avatar(get_comment_author_email(), 50,'', get_comment_author());
			?>
			<span class="author-name">
				<?php comment_author_link(); ?>
			</span>
		</div><!-- .comment-author -->
		<div class="comment-content">
			<?php if($comment->comment_approved == '0'): ?>
				<em><?php _e('Tu comentario esta esperando moderación', 'flyingcat'); ?></em>
			<?php endif; ?>
			<?php comment_text(); ?>
		</div><!-- .comment-content -->
		<div class="comment-footer">
			<span class="comment-date"><?php comment_date(); ?></span>
			<?php 
				comment_reply_link( array_merge($args, array(
					'reply_text' => __('Reply', 'flyingcat'),
					'depth' => $depth,
					'max_depth' => $args['max_depth']
				)));
				edit_comment_link(__('Edit','flyingcat'));
			?>
		</div><!-- .comment-footer -->
	</article><!-- .comment -->


<?php
}




