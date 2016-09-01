<?php get_header(); ?>
	<section id="titre-page">
   			<h1>Our latest <strong>Posts</strong></h1>
    </section>


    <div id="content-blank">
        <div class="contenu-sidebar">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="page-actus">
                <h2><?php the_title(); ?></h2>
                <div class="meta">Posté par <strong><?php the_author(); ?></strong> le <strong><?php the_date(); ?></strong> dans <a href="#"><?php the_category(", "); ?></a></div>
                <?php the_excerpt(); ?>
                <a class="btn" href="<?php the_permalink(); ?>">Lire la suite</a>
            </article>
        <?php endwhile; wp_pagenavi(); else: ?>
            <p>this category has no articles Yet!</p>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>

         <div class="clear"></div>
    </div>

<?php get_footer();