<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="pageBanner">
				<div class="container">
					<div class="projectBannerContent">
						<h1><?php the_title(); ?></h1>
						<h3>Since 2016, our foundation has made 13 Million in total donations to more than twenty initiatives and organizations. </h3>
						<p>The following projects were selected as exemplary of this work.</p>
					</div>
				</div>
			</div>

			<div class="projectBannerSecondSec">
				<div class="container">
					<h3 class="secondDivTitle">Lorem Ipsum dolor sit</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus et pharetra, turpis volutpat risus. Quis eleifend vitae arcu nulla tincidunt eu. Habitasse nulla lacus laoreet cursus. Urna elementum tristique adipiscing ac sollicitudin sagittis.</p>
				</div>
			</div>


			<div class="container pageProject">
					<?php get_template_part('templates/project'); ?>
					<?php get_template_part('templates/project'); ?>
					<?php get_template_part('templates/project'); ?>
			</div>
			<div class="mt-5">

			</div>
			<h2 class="exploreTheme">Explore Projects by Theme</h2>
<?php get_template_part('templates/features-loop'); ?>


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
