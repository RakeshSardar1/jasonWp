<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<div class="pageBanner">
				<div class="container">
					<div class="projectBannerContent">
						<h1><?php the_title(); ?></h1>
						<h3>Since our founding in 2016, we have been dedicated to promoting self-awareness and self-governance, sharing and preserving the values of people in the developing world, and demonstrating the power of non-violence. </h3>
					</div>
				</div>
			</div>

			<div class="aboutWhatWeFound">
					<h2 class="commonH2">What We Fund</h2>
					<div class="container border-bottom">
						<div class="row m-0">
							<div class="col-md-4 border-right">
								<h3>Research</h3>
								<p>We fund comparative research and competency training to empower developing countries, so they can further their management capabilities and govern more efficiently in public affairs. As well as academic exchange programs to help cultures modernize and develop.</p>
							</div>
							<div class="col-md-4 border-right">
								<h3>Programs</h3>
								<p>We fund humanitarian programs, including those which provide aid and save lives in natural disasters and emergencies, those which reduce hunger and poverty, and those which support scientific discoveries that improve healthy living. </p>
							</div>
							<div class="col-md-4">
								<h3>Research</h3>
								<p>Professional training programs in the fields of public affairs, social policy, and health policy.</p>
							</div>
						</div>
						<div class="aboutPageLearnMore">
							<a href="#" class="commonBtn ">Learn More</a>
						</div>
					</div>
			</div>
			<div class="founderStory ">
				<div class="container">
					<h2 class="commonH2">Founder Story</h2>
					<div class="row m-0 pt-4">
						<div class="col-md-7 p-0">
							<h3>Daofeng He</h3>
							<h4>PRESIDENT</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Luctus et pharetra, turpis volutpat risus. Quis eleifend vitae arcu nulla tincidunt eu. Habitasse nulla lacus laoreet cursus. Urna elementum tristique adipiscing ac sollicitudin. Interdum sagittis, sit a nunc molestie convallis ut in nibh. Gravida sed diam id enim blandit pellentesque sit massa. Orci suspendisse duis morbi sit felis porta quam tristique ultricies. Fringilla diam, vivamus pretium vitae neque fermentum et. Quam cum nulla tristique aliquet.</p>

<p>Felis, donec nulla consectetur lacus. Malesuada aliquet nunc, convallis commodo justo leo netus tincidunt in. Aliquam ullamcorper elit ipsum ut lacus, proin. Massa enim scelerisque nulla sodales etiam. Nisl sed id nam lectus euismod ipsum. Nunc id non tincidunt non rhoncus, at fames ultrices risus. Varius nullam pellentesque integer eros, duis orci potenti nunc. In dolor facilisis pulvinar leo aliquet a morbi odio nisi.</p>
<p>Lectus erat viverra vitae aliquam habitasse. Morbi tristique ridiculus sit elit mauris nec massa. Libero facilisis euismod ac quis ornare vitae ipsum. Tempor, in nunc, semper a parturient donec malesuada neque. Massa nunc in sit facilisis. Sit semper erat egestas praesent sed. Elementum enim neque sem vitae viverra dictum adipiscing.
Cursus faucibus mattis id varius egestas. Dictum blandit vulputate metus ultrices nec neque tempus lobortis. Tincidunt morbi facilisi nisl, et risus vel aliquet vel. Accumsan, nunc, amet, convallis facilisis. Rhoncus fermentum habitasse sed purus facilisi posuere leo. Augue arcu congue sit mi eleifend morbi nisl, egestas quis.</p>
						</div>
						<div class="col-md-5 p-0">
							<img src="<?php echo get_template_directory_uri(); ?>/img/5D3_9013 1.png" alt="future program">
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="ourTeam">
					<h2 class="commonH2">Our Team</h2>
					<?php get_template_part('templates/team'); ?>
					<?php get_template_part('templates/team'); ?>
					<?php get_template_part('templates/team'); ?>
				</div>
			</div>

			<div class="youCanHelp">
				<h2>You Can Help</h2>
				<p>We are always looking for volunteers, worthy causes, and partnering organizations who can help us leverage our financial resources for the greater good.</p>
				<a href="#">Get in Touch</a>
			</div>

			<div class="container">
				<div class="awardSection">
					<h2 class="commonH2">Awards & Accolades</h2>
						<?php get_template_part('templates/award'); ?>
					</div>
			</div>


		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
