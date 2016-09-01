<?php


get_header(); ?>
	<section id="titre-page">
   			<h1><?php echo $post->post_title ?></h1>
    </section>
    
    
    <div id="content-blank">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	<?php the_content(); ?>
    <?php endwhile; else: ?>
    <h2>Erreur</h2>		
    <p>Désolé, mais la page que vous recherchez n'existe pas ou plus.A</p>
    <p><a class="btn" href="<?php bloginfo('url'); ?>">Retour à l'accueil du site</a></p>
<?php endif; ?>
    
    </div>

<?php get_footer(); ?>