<?php
/*
template name: home page
*/
?>
<?php get_header(); ?>

<div id="slider" class="nivoslider">
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/image1.jpg" /></a>
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/image2.jpg" /></a>
    <a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/image3.jpg" /></a>
</div>
<div id="content-blank">
    <section id="modules">
        <ul>
            <li>
                <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/img/new.png" />Actualités</h2>
                <?php query_posts('showposts=2'); ?>
                <?php while( have_posts() ): the_post(); ?>
                <article>
                    <h3><span><?php the_time("Y/m/d") ?></span> <a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                    <p><?php the_excerpt_max_charlength(160); ?></p>
                </article>
                <?php endwhile;
                wp_reset_query();?>
            </li>

            <li>
                <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/img/pencil.png" />Dernière création</h2>
                <a href="#"><img class="border" src="<?php bloginfo('stylesheet_directory'); ?>/img/image.jpg" /></a>
                <h3><a href="#">Plateforme vidéo tuto.com</a></h3>
            </li>

            <li id="mot">
                <h2><img src="<?php bloginfo('stylesheet_directory'); ?>/img/bubbles.png" />Un petit mot...</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt aliquam est, et aliquet tortor sollicitudin id. Morbi ipsum diam, adipiscing quis suscipit at, vehicula quis nisl. Mauris euismod porttitor lectus, nec blandit dolor...</p>
                <a class="btn" href="#">En savoir +</a>
            </li>
        </ul>

        <div class="clear"></div>

    </section>
</div>
<?php get_footer(); ?>