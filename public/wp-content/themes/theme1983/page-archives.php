<?php
/**
 * Template Name: Archives
 */
?>

<?php get_header(); ?>

			<div id="content" class="grid_9 <?php echo of_get_option('blog_sidebar_pos') ?>">
            	<div class="<?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "indent_right";} else {echo "indent_left";} ?>">
            
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div id="post-<?php the_ID(); ?>" <?php post_class('post-holder'); ?>>
                    
                    
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                
                    <div class="post-content">
                        <?php the_content('<span>Continue Reading</span>'); ?>
                        <?php wp_link_pages(array('before' => '<p><strong>'.__('Pages:', 'theme1983').'</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                        
                        <div class="archive-lists">
                            
                            <h4><?php _e('Last 5 Posts', 'theme1983') ?></h4>
                            
                            <ul>
                            <?php $archive_5 = get_posts('numberposts=5');
                            foreach($archive_5 as $post) : ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
                            <?php endforeach; ?>
                            </ul>
                            
                            <h4><?php _e('Archives by Month:', 'theme1983') ?></h4>
                            
                            <ul>
                                <?php wp_get_archives('type=monthly'); ?>
                            </ul>
                
                            <h4><?php _e('Archives by Subject:', 'theme1983') ?></h4>
                            
                            <ul>
                                <?php wp_list_categories( 'title_li=' ); ?>
                            </ul>
                        
                        <!-- //.archive-lists -->
                        </div>
                    
                    <!-- //.post-content -->
                    </div>

                </div>

				<?php endwhile; endif; ?>
				
                </div>
			</div><!--#content-->
			
<?php get_sidebar(); ?>

<?php get_footer(); ?>