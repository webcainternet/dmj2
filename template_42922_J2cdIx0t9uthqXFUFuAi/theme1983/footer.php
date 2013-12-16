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
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo( 'template_url' ); ?>/images/small_logo.png" alt="" /></a> &copy; <?php echo date ('Y'); ?> | <a href="<?php bloginfo('url'); ?>/privacy-policy/" title="Privacy Policy"><?php _e('Privacy Policy', 'theme1983'); ?></a> <?php if( is_front_page() ) { ?><a rel="nofollow" href="http://www.templatemonster.com/wordpress-themes.php" target="_blank">TemplateMonster</a> Design. <?php } ?>
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