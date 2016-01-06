<div class="footer">
	<div class="wrapper">
		<section>
			<footer>
				
				<nav class="footer-nav">
					<ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Work</a></li>
						<li><a href="#">Contat</a></li>
					</ul>
				</nav>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'container_id' => 'footer-nav', 'container_class' => 'nav', 'container' => 'nav', 'depth' => 1 ) ); ?>	

				<p class="footer-text">
					© 2016 - Theme Nirvana. All Rights Reserved.
				</p>
			</footer>
		</section>
	</div>
</div>

<div class="search">
	<input type="text" placeholder="Search and press enter">
</div>

		<?php wp_footer(); ?>
		
	</body>
</html>
