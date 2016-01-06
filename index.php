<section>

				<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<h2 class="post-title">
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>

					<?php the_excerpt(); ?>
					<div class="post-meta">
						<a class="read-more" href="<?php the_permalink(); ?>"><?php esc_html_e('Read Post', 'ponder'); ?></a>
						<div class="post-meta__date">
							<p class="date"> <span>/ <?php echo get_the_date(); ?></span></p>
						</div>
					</div>

					<div class="post-meta">
			<div class="post-meta__date">
				<i class="tn tn-calendar"></i>
				January 5th, 2016
			</div>
			<div class="post-meta__author">
				Posted by:
				<a href="#">John Cheese</a>
			</div>
			<div class="post-meta__category">
				in
				<a href="#">Unit Testing</a>
			</div>
		</div>

					<p class="date"> <span>/ <?php echo get_the_date(); ?></span></p>

				</article>

				<?php endwhile; ?>
					

				<nav id="pagi">
					<?php previous_posts_link('Previous'); ?>
					<?php next_posts_link('Next'); ?>
				</nav>
									
			</section>

<!-- 
<section>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="post-title">
			<?php the_title(); ?>
		</h2>
		<div class="post-thumbnail">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</div>
		<div class="post-content">
			<?php the_content(); ?>

			<a href="#" class="read-more">
				Read More
			</a>
		</div>
		<div class="post-meta">
			<div class="post-meta__date">
				<i class="tn tn-calendar"></i>
				January 5th, 2016
			</div>
			<div class="post-meta__author">
				Posted by:
				<a href="#">John Cheese</a>
			</div>
			<div class="post-meta__category">
				in
				<a href="#">Unit Testing</a>
			</div>
		</div>
	</article>
</section>
-->



<?php get_header(); ?>


			
			
		

<?php get_footer(); ?>