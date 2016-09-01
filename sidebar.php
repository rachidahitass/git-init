<?php ?>
<aside class="sidebar">

			<section class="module-sb cat">
			<?php if(is_home() || is_category()) { ?>
			<h2>Catégories</h2>
				<ul>
				<?php wp_list_categories(array(
					'hide_empty' => 1,
					'title_li' => ''
				)); ?>
				</ul>
			<?php } else { ?>
				<h2>Last Articles:</h2>
				<ul>
					<?php query_posts('showposts=3'); ?>
					<?php while( have_posts() ): the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<?php endwhile;
					wp_reset_query();?>
				</ul>
			<?php } ?>

			</section>
			
			<section class="module-sb">
			<h2>Réseaux sociaux</h2>
				<a title="Suivez-nous sur Twitter" class="icone" id="twitter" href="#">Twitter</a>
				<a title="Aimez-nous sur Facebook !" class="icone" id="facebook" href="#">Facebook</a>
			</section>
			
			<section class="module-sb">
			<h2>Derniers tweets</h2>
			<div id="tweet"></div>
			</section>
			
		</aside>