<?php
function elegance_widgets_init() {
	
	// Area 1
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Area 1',
		'id' 						=> 'area-1',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Area 2
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Area 2',
		'id' 						=> 'area-2',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Area 3
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Area 3',
		'id' 						=> 'area-3',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Area 4
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Area 4',
		'id' 						=> 'area-4',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Area 5
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Area 5',
		'id' 						=> 'area-5',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Area 1
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Content Area 1',
		'id' 						=> 'content-area-1',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Area 2
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Content Area 2',
		'id' 						=> 'content-area-2',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Area 3
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Content Area 3',
		'id' 						=> 'content-area-3',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Content Area 4
	// Location: at the top of the content
	register_sidebar(array(
		'name'					=> 'Content Area 4',
		'id' 						=> 'content-area-4',
		'description'   => __( 'Located at the top of the content.'),
		'before_widget' => '<div id="%1$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array(
		'name'					=> 'Sidebar',
		'id' 						=> 'main-sidebar',
		'description'   => __( 'Located at the right side of pages.'),
		'before_widget' => '<div id="%1$s" class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
}
/** Register sidebars by running elegance_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'elegance_widgets_init' );
?>