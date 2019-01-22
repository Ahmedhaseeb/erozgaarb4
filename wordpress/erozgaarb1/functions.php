<?php
	add_theme_support('menus');
	add_theme_support('widgets');

// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => 'Header',
	) );

	register_nav_menus( array(
		'footer' => 'Footer',
	) );


// function akpk_my_custom_header_code()
// {
// 	// echo "<script>alert('asdas');</script>";
// }


$args = array(
		'name'          =>  'Right Sidebar',
		'id'            => 'right-sidebar',    // ID should be LOWERCASE  ! ! !
		'description'   => 'This sidebar appear on the right side of website',
	        // 'class'         => 'col-sm-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widgettitle">',
		'after_title'   => '</h4>' 
	);
register_sidebar($args);
// add_action('wp_footer','akpk_my_custom_header_code');
?>