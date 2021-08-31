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

			<div class="whatWeFundSecondDiv">
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus et pharetra, turpis volutpat risus. Quis eleifend vitae arcu nulla tincidunt eu. Habitasse nulla lacus laoreet cursus. Urna elementum tristique adipiscing ac sollicitudin. Interdum sagittis, sit a nunc molestie convallis ut in nibh. Gravida sed diam id enim blandit pellentesque sit massa. Orci suspendisse duis morbi sit felis porta quam tristique ultricies. Fringilla diam, vivamus pretium vitae neque fermentum et. Quam cum nulla tristique aliquet.</p>
				</div>
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

			<div class="mainFundPageImg">
					<img src="<?php echo get_template_directory_uri(); ?>/img/fundPageImg.png" alt="fund team">
			</div>

			<div class="howToApply">
				<div class="container">
					<div class="applySec">
						<h2 class="commonH2">How To Apply</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus et pharetra, turpis volutpat risus. Quis eleifend vitae arcu nulla tincidunt eu. Habitasse nulla lacus laoreet cursus. Urna elementum tristique adipiscing ac sollicitudin. Interdum sagittis, sit a nunc molestie convallis ut in nibh. Gravida sed diam id enim blandit pellentesque sit massa. Orci suspendisse duis morbi sit felis porta quam tristique ultricies. Fringilla diam, vivamus pretium vitae neque fermentum et. Quam cum nulla tristique aliquet.</p>
						<a href="#" class="commonBtn">contact us</a>
					</div>
				</div>
			</div>

			<div class="reports">
				<h2 class="commonH2">Reports</h2>
				<div class="container">
					<?php get_template_part('templates/reports'); ?>
				</div>
			</div>

<?php get_footer(); ?>
