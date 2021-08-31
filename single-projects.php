<?php get_header(); ?>
<div class="singlePostDetails">
	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
			<div class="singleProjectTop">
				<?php
				$post_type = get_post_type( get_the_ID() );?>
				<div class="breadCrumb">
					<p class="breadCrumbType"><span><?php echo $post_type; ?></span> / <span class="singlePageCurrentCat"> <?php the_terms($post->ID, 'project_categories');  ?></span> </p>
				</div>
					<h1 class="singlePageCustomTitle singlePageHeadLine"><?php the_title(); ?></h1>
			</div>

			<div class="singlePostFeaturesImg">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
				<!-- /post thumbnail -->
			</div>

			<div class="singlePostSecondSec">
				<div class="container">
					<div class="row m-0">
						<div class="col-md-4">
							<h2>contribution</h2>
							<p>Financial</p>
						</div>
						<div class="col-md-4">
							<h2>Recipients</h2>
							<ul>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/icons/chinaFolk.png" alt="chinaFolk" class="chinaFolk"> China Folk House Retreat <i class="fas fa-external-link-alt"></i></li>
								<li><img src="<?php echo get_template_directory_uri(); ?>/img/icons/chinaFolk.png" alt="chinaFolk" class="chinaFolk"> Chinese Government Sponsor <i class="fas fa-external-link-alt"></i></li>
							</ul>
						</div>
						<div class="col-md-4">
							<h2>Our Impact</h2>
							<small> Financially sponsoring the preservations and rebuilding of an original farm house from the village of Cizhong (Yunnan) at the Friends Wilderness Center in West Virginia until its completion in 2021.</small>
						<p><a href="#">Download Report <img src="<?php echo get_template_directory_uri(); ?>/img/icons/down-arrow.png" alt="down-arrow" class="down-arrow"></a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="mainSingleContent">
					<?php the_content(); // Dynamic Content ?>
				</div>
			</div>
			<div class="mt-5">

			</div>
			<h2 class="exploreTheme">Explore Projects by Theme</h2>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>
</div>
<?php get_template_part('templates/features-loop'); ?>
<?php get_footer(); ?>
