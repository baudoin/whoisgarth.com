<?php get_header(); ?>
			
	<section id="garth" class="panel shrunk" data-stellar-background-ratio="0.5">

		<div class="story">

			<div class="copy">

				<?php if(get_field('garth_block')): ?>
				 
					<?php while(has_sub_field('garth_block')): ?>

					<h1><?php the_sub_field('title'); ?></h1>
				 
					<?php the_sub_field('copy'); ?>
				 
					<?php endwhile; ?>
				 
				<?php endif; ?>

			</div>

		</div>

	</section> <!-- end #garth -->
	
	<section id="what" class="panel">

		<div class="story">

			<?php if(get_field('what_block')): ?>
				 
				<?php while(has_sub_field('what_block')): ?> 				

				<div class="graphic">
					<img src="<?php the_sub_field('image'); ?>" alt="What I Do Graphic">
				</div>

				<hr class="dotted">

				<div class="copy left">
					<?php the_sub_field('first_copy_block'); ?>
				</div>

				<div class="copy right">
					<?php the_sub_field('second_copy_block'); ?>
				</div>
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>

		</div>

	</section> <!-- end #what -->

	<section id="who" class="panel">

		<div class="story">

			<?php if(get_field('who_block')): ?>
				 
				<?php while(has_sub_field('who_block')): ?> 

				<div class="copy">
					<p class="lead"><?php the_sub_field('title'); ?></p>

					<?php the_sub_field('copy'); ?>
				</div>
				<div class="graphic">
					<img src="<?php the_sub_field('image'); ?>" alt="Worms">
				</div>
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>

		</div>

	</section> <!-- end #who -->

	<section id="work" class="panel">

		<div class="story">

			<?php if(get_field('work_block')): ?>
				 
				<?php while(has_sub_field('work_block')): ?>

				<h3><?php the_sub_field('title'); ?></h3>

				<hr class="dotted">

				<ul class="left">

					<?php while(has_sub_field('first_clients')): ?>

					<li><p class="title"><?php the_sub_field('client_name'); ?></p>
						<p><?php the_sub_field('client_copy'); ?></p>
					</li>

					<?php endwhile; ?>
					 
				</ul>

				<ul class="right">
				
					<?php while(has_sub_field('second_clients')): ?>

					<li><p class="title"><?php the_sub_field('client_name'); ?></p>
						<p><?php the_sub_field('client_copy'); ?></p>
					</li>

					<?php endwhile; ?>
					
				</ul>
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>

		</div>

	</section> <!-- end #work -->

	<section id="contact" class="panel">

		<div class="story">

			<?php if(get_field('contact_block')): ?>
				 
				<?php while(has_sub_field('contact_block')): ?>

				<div class="copy">
					<h3><?php the_sub_field('title'); ?></h3>
					<?php the_sub_field('copy'); ?>
				</div>

				<div class="form-wrap">
					<?php echo FrmEntriesController::show_form(2, $key = 'thxwgd', $title=false, $description=false); ?>
				</div>
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>

		</div>

		<?php include 'panel-footer.php'; ?>

	</section> <!-- end #contact -->

<?php get_footer(); ?>
