<?php get_header(); ?>
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<?php while(have_posts()):the_post() ?>
							<!-- show the image -->
					 	    <?php the_post_thumbnail(); ?>
					 	    <!-- show the content -->
					 	    <?php the_content(); ?>
				
						<div class="comment">
							Your email address will not be published. Required fields are marked *
							<!-- show the comment template -->
						   <?php comments_template(); ?>
						</div>
						<?php endwhile ?>

					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					
					<div class="box">
				      <?php dynamic_sidebar('sidebarone'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>