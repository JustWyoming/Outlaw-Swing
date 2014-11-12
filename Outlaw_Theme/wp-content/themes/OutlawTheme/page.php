<?php get_header(); ?>

<div id="contentWrap">
  
    <div id="content">
    
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    
                  
                    <div class="entry">
                        <?php the_content(); ?>
                    </div>
                    <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                    <div class="postmetadata">
                        <?php the_tags('Tags: ', ', ', '<br />'); ?>
                         
                       
                    </div>
                </article>
              
			<?php endwhile; ?>
        <?php else : ?>
            <h2>Not Found</h2>
        <?php endif; ?>
    
    </div> <!-- end contentWrap -->
   
</div> <!-- end content -->

<?php get_footer(); ?>
