<?php get_header(); ?>
	<section id="titre-page">
   			<h1>We found: <strong><?php echo $wp_query->found_posts ?></strong> <mark>"<?php the_search_query(); ?>"</mark> <?php if($wp_query->found_posts > 1) {?>terms <?php } else { ?> term <?php } ?></h1>
    </section>


    <div id="content-blank">
        <div class="contenu-sidebar">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="page-actus">
                <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                <a class="btn" href="<?php the_permalink(); ?>">Lire la suite</a>
            </article>
        <?php endwhile; wp_pagenavi(); else: ?>
            <p>no search results here :(</p>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>

         <div class="clear"></div>
    </div>

<?php get_footer();