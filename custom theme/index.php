
<?php 
// Template Name:blog
 ?>
<?php  get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php
					if(have_posts()):
					 while(have_posts()):the_post()?>
					 <article>
					 	<!-- show the image -->
					 	<?php the_post_thumbnail(); ?>
					 	<!-- show the title -->
					 	<h2>
					 		<a href="<?php the_permalink() ?>">
					 		<?php the_title(); ?>
					 	</a>
					 	</h2>
					 	
					 	<!-- show the content -->
					 	<?php echo  get_the_excerpt(); ?>
					 	<!-- show the author name -->
					 	<h4 style="color:blue; margin-top: 5px;"><?php the_author(); ?></h4>
					 	<!-- show comment -->
					 	<?php comments_popup_link(); ?>

					 </article>

                      <?php endwhile;?>
                      <?php else : ?>
                        <article>
						<img src="<?php echo get_template_directory_uri() ?>/images/img1.png"/>
						<h2><a href="#">Dreaming With Us All Night</a></h2>
						<div class="info">[By Admin on December 01, 2012 with <a href="#">01 Commnets</a>]</div>
						<p>Consectetur adipisci. Belit, sed quia non numquam eius modi tempora incidunt, ut labore et dolore ater magnam aliquam quaerat voluptatem. ut enim ad minima ven m, quis nost. Rum exercitationem ullam...</p>
					</article>
                      <?php endif; ?>
                      <!-- pagination dynamic -->
                      <ul id="pagi">
                      <?php the_posts_pagination(array(
                      	'prev_text'=>'PREV',
                      	'next_text'=>'NEXT',
                      	'screen_reader_text'=>' '
                      ));
                       ?>
					</ul>

				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
						<?php if ( is_active_sidebar( 'sidebarone' ) ) : ?>
			        <?php dynamic_sidebar( 'sidebarone' ); ?>
			    <?php else : ?>
			        <!-- Time to add some widgets! -->
			        	
			      <div class="heading"><h2>Latest Albums</h2></div>
				       <div class="content">
							<img src="<?php echo get_template_directory_uri() ?>/images/albums.png"/>
						</div>
                   <div class="heading"><h2>Upcoming Events</h2></div>
						<div class="content">
							<div class="list">
								<ul>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
									<li><a href="#">Magic Island Ibiza</a></li>
									<li><a href="#">Bamboo Is Just For You</a></li>
									<li><a href="#">Every Hot Summer</a></li>
								</ul>
							</div>
						</div>
			
			    <?php endif; ?>
				
					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
