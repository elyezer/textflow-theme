<?php
	get_header();
	
	if (is_front_page()):
		include('features-highlight.php');
	else:
?>
        <div id="content-wraper" class="grid_12">
            <div id="content">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                        <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a><?php edit_post_link('Edit', ' (', ')'); ?></h1>
                        <?php the_content('Read the rest of this entry &raquo;'); ?>
                    </div>
                <?php endwhile; endif; ?>
            </div><!--end content-->
        </div><!--end content-->
        <?php endif; ?>
<?php get_footer(); ?>