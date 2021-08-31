<div class="row">
<?php
$i = 0;
$loop = new WP_Query( array( 'post_type' => 'media'));
while ( $loop->have_posts() ) : $loop->the_post();
if($i<2){
if($i===0){
  $padding='padding-top:0';
}
elseif ($i===1) {
$padding='padding-top:5rem';
}
  ?>
  <div class="row m-0 align-items-center fullDivMedia" style="<?php echo $padding;  ?>" >
    <div class="col-md-6">
      <h3><?php the_title(); ?></h3>
    </div>
    <div class="col-md-6 pr-0">
      <div class="aboutMemberFeaturedImg">
        <!-- post thumbnail -->
        <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
          </a>
        <?php endif; ?>
        <!-- /post thumbnail -->

      </div>
    </div>
  </div>
<?php }
else {
  if($i==2 || $i==3){
    $border="border-right: 1px solid #E0E0E0";
  }
  else {
    $border="border:none";
  }
  ?>
  <div class="col-md-4 normalDiv" style="<?php echo $border; ?>">
    <div class="aboutMemberFeaturedImg">
      <!-- post thumbnail -->
      <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
          <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
        </a>
      <?php endif; ?>
      <!-- /post thumbnail -->

      <h3><?php the_title(); ?></h3>

       <p><?php echo wp_trim_words( get_the_content(), 30, '...' ); ?></p>
       <a href="<?php the_permalink(); ?>">ream more <img src="<?php echo get_template_directory_uri(); ?>/img/icons/rightArrow.png" alt="right-arrow" class="rightArrow"></a>

    </div>
  </div>
<?php }
?>
<?php $i++; endwhile; ?>
</div>
