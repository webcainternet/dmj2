<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

    <div class="grid_12">
    	
        <div class="grid_3 alpha">
			<?php if ( ! dynamic_sidebar( 'Content Area 1' ) ) : ?>
                <!--Widgetized 'Content Area' for the home page-->
            <?php endif ?>
        </div>
        
        <div class="grid_3">
			<?php if ( ! dynamic_sidebar( 'Content Area 2' ) ) : ?>
                <!--Widgetized 'Content Area' for the home page-->
            <?php endif ?>
        </div>
        
        <div class="grid_3">
			<?php if ( ! dynamic_sidebar( 'Content Area 3' ) ) : ?>
                <!--Widgetized 'Content Area' for the home page-->
            <?php endif ?>
        </div>
        
        <div class="grid_3 omega">
        	<div class="box_1">
				<?php if ( ! dynamic_sidebar( 'Content Area 4' ) ) : ?>
                    <!--Widgetized 'Content Area' for the home page-->
                <?php endif ?>
            </div>
        </div>
    
    </div>

<?php get_footer(); ?>