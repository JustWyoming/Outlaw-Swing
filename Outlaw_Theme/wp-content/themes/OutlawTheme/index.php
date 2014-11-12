<!-- main content area for Wordpress theme -->
<?php get_header(); ?>
<div id="contentWrap">

	<div id="content">
    	<?php if ( have_posts() ) : ?>
        	<?php while ( have_posts() ) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                    <div class="meta">
                    	<em>Posted on:</em> <?php the_time('F jS, Y') ?>
                    	<em>by</em> <?php the_author() ?>
                	</div>
                    
                    <div class="entry">
                    	<?php the_content (); ?>
                    </div>
                    <div class="postmetadata">
						<?php the_tags('Tags: ', ', ', '<br />'); ?>
                        Posted in <?php the_category(', ') ?> | 
                       
                    </div>
                </article>              
			<?php endwhile; ?>
			<?php else : ?>
				<h2>Not Found</h2>
		<?php endif; ?>
    </div><!-- end of content -->
    	<?php get_sidebar (); ?>
</div><!-- end of contentWrap -->
<?php get_footer(); ?>
