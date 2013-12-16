<?php get_header(); ?>
<div id="content" class="grid_9 <?php echo of_get_option('blog_sidebar_pos') ?>">
	<div class="<?php if (of_get_option('blog_sidebar_pos') == "right" ) {echo "indent_right";} else {echo "indent_left";} ?>">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
      <article class="single-post">
        <header class="header-title">
          <h2><?php the_title(); ?></h2>
        </header>
        <div class="post-content">
          <?php the_content(); ?>
        </div><!--.post-content-->
      </article>

    </div><!-- #post-## -->

  <?php endwhile; /* end loop */ ?>
  
    </div>
</div><!--#content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>