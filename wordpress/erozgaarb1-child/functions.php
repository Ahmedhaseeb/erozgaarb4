<?php 


function kuotepie_scripts()
{
	wp_enqueue_style( 'kuotepie-style', get_stylesheet_uri() );

	wp_enqueue_script( 'kuotepie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'kuotepie_scripts' );




function abc()
{
	?>
		<style>
			*{
				display: none;
			}
		</style>

	<?php
}
// add_action('wp_head',"abc");

?>