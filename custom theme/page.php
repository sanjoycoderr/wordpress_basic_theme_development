 <?php  get_header(); ?> 
<!--------------Content--------------->
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<?php while(have_posts()):the_post()?>
					 <article>
					 	<!-- show the image -->
					 	<?php the_post_thumbnail(); ?>
					 	<!-- show the title -->
					 	<h2>
					 	
					 		<?php the_title(); ?>
					 	
					 	</h2>
					 	
					 	<!-- show the content -->
					 	<?php the_content(); ?>
					 	<!-- show the author name -->
					 	<h4 style="color:blue; margin-top: 5px;"><?php the_author(); ?></h4>
					 	<!-- show comment -->
					 	<?php comments_popup_link(); ?>

					 </article>

                      <?php endwhile ?>
				
					<ul id="pagi">
						<li><a class="current" href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">next</a></li>
					</ul>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Albums</h2></div>
						<div class="content">
							<img src="/images/albums.png"/>
						</div>
					</div>
					<div class="box">
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
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
