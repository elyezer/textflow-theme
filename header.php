<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php bloginfo('name'); ?> <?php wp_title('&raquo;', true, 'left'); ?></title>
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" charset="utf-8" />
</head>

<body>
	<div id="wrapper" class="container_12">
    	<div id="header" class="grid_12">
        	<a id="home-link" href="<?php echo get_option('home'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
            
            <ul id="navigation">
            	<?php wp_list_pages(array('depth'=>1, 'title_li'=>'')); ?>
            </ul>
        </div><!--end header-->