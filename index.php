<?php
	get_header();
	
	if (is_front_page()):
		include('features-highlight.php');
	else:
?>
        <div id="blog-content" class="grid_9">
        	<div id="content">
            	<?php if (have_posts()) : ?>
            
					<?php while (have_posts()) : the_post(); ?>

                        <div class="postdate">
                            <div class="month m-<?php the_time('m') ?>"><?php the_time('M') ?></div>
                            <div class="day d-<?php the_time('d') ?>"><?php the_time('d') ?></div>
                            <div class="year y-<?php the_time('Y') ?>"><?php the_time('Y') ?></div>
                        </div>

                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                            <?php the_content('Read the rest of this entry &raquo;'); ?>
                            <p class="postmetadata">Posted by <strong><?php the_author() ?></strong> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></p>
                        </div>
                    <?php endwhile; ?>
                    <div class="navigation">
            <div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
            <div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
        </div>
                <?php else : ?>
                    <h1>Not Found</h2>
                    <p>Sorry, but you are looking for something that isn't here.</p>
                    <?php get_search_form(); ?>
                <?php endif; ?>
            </div><!--end content-->
        </div><!--end content-->
        <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>