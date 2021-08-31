<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="pageBanner">
				<div class="container">
					<div class="projectBannerContent">
						<h1><?php the_title(); ?></h1>
						<h3>Since our founding in 2016, we have been dedicated to promoting self-awareness and self-governance, sharing and preserving the values of people in the developing world, and demonstrating the power of non-violence.</h3>
					</div>
				</div>
			</div>

			<div class="mediaAndPress">
				<h2 class="commonH2 m-0">Media & Press</h2>
				<div class="container">
					<?php get_template_part('templates/media'); ?>
				</div>
			</div>

			<div class="reports mediaReports">
				<h2 class="commonH2">Reports</h2>
				<div class="container">
					<?php get_template_part('templates/reports'); ?>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
