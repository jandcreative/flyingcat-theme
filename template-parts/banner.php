<section id="banner" class="banner">

			<div class="hero-contact">

				<div class="container-contact">

					<h3><?php the_field('title', 'options');?></h3>
					<?php the_field('text', 'options');?>

					<button><a href="<?php the_field('link', 'options');?>" target="_blank"><?php the_field('button', 'options');?></a></button>
				</div>
					
			</div>

</section>
