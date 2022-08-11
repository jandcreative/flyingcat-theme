
<section class="brands">

	<h2><?php the_field('title_brands', 'options');?></h2>

	<div class="clients">

		<?php while ( have_rows('icons_brands', 'options') ) : the_row(); ?> 
		 		 
		<div class="client">
			<a href="<?php the_sub_field('url_logo');?>" target="_blank"><img src="<?php the_sub_field('logo');?>"></a>
		</div>

		<?php endwhile; ?>

	</div>

</section>