<div class="row">
<?php
$loop = new WP_Query( array( 'post_type' => 'team'));
while ( $loop->have_posts() ) : $loop->the_post();
?>
<div class="col-md-4">
  <div class="aboutUsTeamMember">
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
    <h4><?php
    echo get_post_meta( get_the_ID(), 'designation', true );
    ?></h4>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>
  </div>
</div>
<?php endwhile; ?>
</div>
