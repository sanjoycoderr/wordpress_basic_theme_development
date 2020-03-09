
<?php get_header(); ?>
<section id="content">
	<div class="wrap-content zerogrid">
		<div class="row block03">
			<div class="col-2-3">
				<div class="wrap-col">
					<article>
						<?php echo  do_shortcode('[contact-form-7 id="88" title="Untitled"]'); ?>
				
					</article>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<?php if ( is_active_sidebar( 'contact_sidebar' ) ) : ?>
			        <?php dynamic_sidebar( 'contact_sidebar' ); ?>
			    <?php else : ?>
			    	default sidebar
			    <?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
