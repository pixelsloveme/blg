<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
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
<?php endwhile; ?>

<?php get_footer(); ?>