<div class="row m-0">
<?php
$loop = new WP_Query( array( 'post_type' => 'reports','order'   => 'ASC',));
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-md-4">
    <div class="aboutMemberFeaturedImg">
      <!-- post thumbnail -->
  		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
  			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  				<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
  			</a>
  		<?php endif; ?>
  		<!-- /post thumbnail -->

    </div>
    <h3><?php the_title(); ?></h3>
   <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
   <a href="#">Download PDF <img src="<?php echo get_template_directory_uri(); ?>/img/icons/down-arrow.png" alt="download-arrow" class="downloadArrow"></a>

</div>
<?php endwhile; ?>
</div>
