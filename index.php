<?php get_header(); ?>
	
	<div class="home-wrap">
		
		<div class="form-inner">
		
			<?php // https://github.com/registerguard/baffin/issues/5 ?>
			
			<?php $sans_protected = new WP_Query(array('has_password' => FALSE)); ?>
			
			<?php while ($sans_protected->have_posts()): ?>
				
				<?=$sans_protected->the_post()?>
				
				<h1><a href="<?=the_permalink()?>"><?=the_title()?></a></h1>
				<div><?=the_category()?></div>
				
			<?php endwhile; ?>
			
			<?php wp_reset_postdata(); ?>
			<!-- [END] The loop -->
			
		</div><!-- /.form-inner -->
		
	</div><!-- /.form-wrap -->
	
<?=get_footer()?>
