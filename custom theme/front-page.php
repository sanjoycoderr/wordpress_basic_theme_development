<?php get_header(); ?>
<!--------------Content--------------->
<?php 
/*
   Template Name : Home
 */
?>
<div class="featured">
	<div class="wrap-featured zerogrid">
		<div class="slider">
			<div class="rslides_container">
				<ul class="rslides" id="slider">

					<!-- show slider -->

					<?php 
					$slideritem=new WP_query(array(
						'post_type'=>'boommisc'
					));
					 ?>
					 <?php if(have_posts()): ?>
					 <?php while($slideritem->have_posts()):$slideritem->the_post(); ?>
					<li><?php the_post_thumbnail();  ?></li>
				<?php endwhile; ?>
				 <?php else: ?>
				 	<li><img src="<?php echo get_template_directory_uri() ?>/images/slide1.png"/></li>
					<li><img src="<?php echo get_template_directory_uri() ?>/images/slide2.png"/></li>
					<li><img src="<?php echo get_template_directory_uri() ?>/images/slide3.png"/></li>
                <?php  endif;?>
				<!-- end show slider -->
					
				</ul>
			</div>
		</div>
	</div>
</div>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block01">

			<!-- show block -->

			<?php 
			$blockitem=new WP_query(array(
				'post_type'=>'block'
			));
			 ?>
              <?php if(have_posts()): ?>
            <?php while($blockitem->have_posts()):$blockitem->the_post(); ?>

			<div class="col-1-3">
				<div class="wrap-col box">
					<h2><?php the_title(); ?></h2>
					<p><?php echo  get_the_excerpt()?></p>
					<div class="more"><a href="<?php the_permalink() ?>">read more</a></div>
				</div>
			</div>

           <?php endwhile; ?>
           <?php else: ?>
           	 <div class="col-1-3">
				<div class="wrap-col box">
					<h2>The White Night</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Tons of Fans</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
					<h2>Best DJ's Ever</h2>
					<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis.</p>
					<div class="more"><a href="#">[...]</a></div>
				</div>
			</div>
       <?php endif; ?>


			<!-- end show block -->

			
		</div>
		<div class="row block02">
			<div class="col-2-3">
				<div class="wrap-col">
					<div class="heading"><h2>Latest Blog</h2></div>

                    <!-- show posts -->
                     <?php 
                     $postss=new WP_query(array(
                     	'post_type'=>'post',
                     	'posts_per_page'=>5
                     ));
                      ?>
                     <?php if( $postss->have_posts()):?>

                     <?php while( $postss->have_posts()): $postss->the_post() ?>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<?php the_post_thumbnail(); ?>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="info"><?php the_author(); ?><a href="#">with <?php comments_popup_link(); ?></a></div>
								<p><?php echo  get_the_excerpt()?></p>
							</div>
						</div>
					</article>
				<?php endwhile; ?>
				<?php else : ?>
                 <article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri() ?>/images/img1.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Dreaming With Us All Night</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri() ?>/images/img2.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Welcome To Our Great Site</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
					<article class="row">
						<div class="col-1-3">
							<div class="wrap-col">
								<img src="<?php echo get_template_directory_uri() ?>/images/img3.png"/>
							</div>
						</div>
						<div class="col-2-3">
							<div class="wrap-col">
								<h2><a href="#">Stereosonic Is Back Just For You</a></h2>
								<div class="info">By Admin on December 01, 2012 with <a href="#">01 Commnets</a></div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor [...]</p>
							</div>
						</div>
					</article>
				<?php endif; ?>
					
				
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col box">
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
</section>
<?php get_footer(); ?>