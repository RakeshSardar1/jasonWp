<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="projectCatTop">
				<?php $post_type = get_post_type( get_the_ID() );
echo '<p class="customPostType">' . $post_type . '</p>'; ?>
				<h1 class="projectCatTitle"><?php	single_cat_title(); ?></h1>
			</div>
			<div class="projectCatSecondDiv">
				<div class="firstProjectCatDiv">
							<div class="projectCatSecondSec">
								<p class="secondCatDivTitle">Why We’re funding this direction</p>
								<p class="secondCatDivPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim congue semper id netus orci id at. Aliquet pharetra at tortor, justo. Venenatis condimentum at bibendum viverra aliquet rutrum odio.</p>
							</div>
							<div class="projectCatSecondSec">
								<p class="secondCatDivTitle">What we look for in the projects we fund</p>
								<p class="secondCatDivPara">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim congue semper id netus orci id at. Aliquet pharetra at tortor, justo. Venenatis condimentum at bibendum viverra aliquet rutrum odio.</p>
							</div>
				</div>
			</div>
		</section>
		<!-- /section -->
		<div class="container">
			<?php get_template_part('templates/project'); ?>
			<?php get_template_part('templates/project'); ?>
			<?php get_template_part('templates/project'); ?>
			<div class="seeMoreBtnSec">
				<a href="#" class="seeMoreBtnProject">see more</a>
			</div>
			<h2 class="exploreTheme">Explore Projects by Theme</h2>
		</div>


<?php get_template_part('templates/features-loop'); ?>
	</main>


<?php get_footer(); ?>
