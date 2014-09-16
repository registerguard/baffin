<?php get_header(); ?>
	
	<div class="home-wrap">
		
		<div class="form-inner">
		
			<!-- [BEGIN] The loop -->
			<?php while (have_posts()): ?>
			
				<?=the_post()?>
			
				<h1><a href="<?=the_permalink()?>"><?=the_title()?></a></h1>
				<div class="form-category"><?=the_category()?></div>
				
			<?php endwhile; ?>
			<!-- [END] The loop -->
			
		</div><!-- /.form-inner -->
		
	</div><!-- /.form-wrap -->
	
<?=get_footer()?>
