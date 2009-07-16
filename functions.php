<?php

function textflow_init() {
	//if (!is_admin() && is_front_page()) {
		wp_enqueue_style('thickbox');
		wp_enqueue_script('textflow', get_template_directory_uri() . '/textflow.js', array('thickbox'), '0.1');
	//}
}

add_action('init', textflow_init);

?>