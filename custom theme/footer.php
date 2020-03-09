<!--------------Footer--------------->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
		
		  <?php if(is_active_sidebar('footerone')): ?>
			<?php dynamic_sidebar('footerone'); ?>
			<?php else : ?>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>About Us</h2></div>
						<div class="content">
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Post</h2></div>
						<div class="content">
							<ul>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
								<li><a href="#">Every Hot Summer</a></li>
								<li><a href="#">Magic Island Ibiza</a></li>
								<li><a href="#">Bamboo Is Just For You</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Hot Albums</h2></div>
						<div class="content">
							<div class="tag">
								<a href="#">Galaxy</a><a href="#">Beatport</a><a href="#">Amazon</a><a href="#">Itunes</a><a href="#">Sonic</a><a href="#">Kpopps</a><a href="#">Summer</a><a href="#">Magical</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Contact Us</h2></div>
						<div class="content">
							<ul>
								<li>Address : 0123 Some Street. Country</li>
								<li>Phone : 000.000.000.000</li>
								<li>Email : admin@zerotheme.com</li>
								<li>Website : www.zerotheme.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php endif ?>

        </div>
		<div class="row copyright">
			<p>Copyright © 2013 - <a href="https://www.zerotheme.com/432/free-responsive-html5-css3-website-templates.html" target="_blank">Free Html5 Templates</a> by <a href="https://www.zerotheme.com" target="_blank">Zerotheme.com</a></p>
	   </div>
		
</div>
</footer>
<?php wp_footer(); ?>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
</body></html>