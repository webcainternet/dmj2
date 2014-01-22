
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

			</div>
        </div>
    </div>
  
    <footer id="footer">
        <div class="container_12 clearfix">
            <div class="grid_12">
                
				<?php if ( of_get_option('footer_menu') == 'true') { ?>  
                    <nav class="footer">
						<?php wp_nav_menu( array(
							'container'       => 'ul', 
							'menu_class'      => 'footer-nav', 
							'depth'           => 0,
							'theme_location' => 'footer_menu' 
                          )); 
                        ?>
                    </nav>
                <?php } ?>
                    
                <div id="footer-text">
					<?php $myfooter_text = of_get_option('footer_text'); ?>
                    <?php if($myfooter_text){?>
						<?php echo of_get_option('footer_text'); ?>
                    <?php } else { ?>
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo( 'template_url' ); ?>/images/small_logo.png" alt="" style="margin-top: 6px;" /></a> &copy; <?php echo date ('Y'); ?> | Desenvolvido por <a href="http://webca.com.br/" target="_blank" title="WebCA Internet">WebCA Internet</a>
                    <?php } ?>
                </div>
					
            </div>
        </div><!--.container-->
    </footer>
    
</div><!--#main-->
<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
<?php if(of_get_option('ga_code')) { ?>
	<script type="text/javascript">
		<?php echo stripslashes(of_get_option('ga_code')); ?>
	</script>
  <!-- Show Google Analytics -->	
<?php } ?>
</body>
</html>