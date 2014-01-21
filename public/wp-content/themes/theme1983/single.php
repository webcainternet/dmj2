<?php get_header(); ?>

	<div id="content" class="grid_9 <?php echo of_get_option('blog_sidebar_pos') ?>">
		<div class="<?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "indent_right";} else {echo "indent_left";} ?>">
		
		<?php 
                
			if (have_posts()) : while (have_posts()) : the_post(); 
			
					// The following determines what the post format is and shows the correct file accordingly
					$format = get_post_format();
					get_template_part( 'includes/post-formats/'.$format );
					
					if($format == '')
					get_template_part( 'includes/post-formats/standard' ); ?>
					
					<div class="clear"></div>
                    
		<?php get_template_part( 'includes/post-formats/related-posts' ); ?>

					
    
		<?php comments_template('', true); ?>
		
		
		<?php endwhile; endif; ?>
    
		</div>
	</div><!--#content-->
<?php get_sidebar(); ?>

fewfewfew
<?php get_footer(); ?>