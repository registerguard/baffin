<?php get_header(); ?>
	
	<div class="form-wrap">
	<div class="form-inner">
		
		<!-- [BEGIN] The loop -->
		<?php while (have_posts()): ?>
		
			<?=the_post()?>
			
			<!-- <h1><?php the_title(); ?></h1> -->
			
			<?=the_content()?>
			
		<?php endwhile; ?>
		<!-- [END] The loop -->
	</div>
	</div><!-- /.form-wrap -->
	
<?=get_footer()?>
