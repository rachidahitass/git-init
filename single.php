<?php


get_header(); ?>
    
    
    <div id="content-blank">
        <div class="contenu-sidebar">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="page-actus">
                    <h2><?php the_title(); ?></h2>
                    <div class="meta">Posté par <strong><a href="<?php the_author_posts(); ?>"><?php the_author(); ?></a></strong> le <strong><?php the_date(); ?></strong> dans <a href="#"><?php the_category(", "); ?></a></div>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; else: ?>
                <p>this category has no articles Yet!</p>
            <?php endif; ?>
            <?php previous_post_link('%link', '&laquo; previous article') ?>
            <?php next_post_link('%link', 'next article &raquo;') ?>
            
        </div>
        <?php get_sidebar(); ?>

        <div class="clear"></div>
    
    </div>

<?php get_footer(); ?>