<div class="container">
	<div class="col-sm-4">
		<?php the_field('left'); ?>
	</div>
	<div class="col-sm-4">
		<?php the_field('middle'); ?>
	</div>
	<div class="col-sm-4">
		<?php the_field('right'); ?>
	</div>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
