<?php
$loop = new WP_Query( array( 'post_type' => 'award'));
$i = 0;
while ( $loop->have_posts() ) : $loop->the_post();
if($i==2){
  $border='border: none';
}
?>
<div class="singleAward">
  <div class="row m-0" style="<?php echo $border; ?>">
    <div class="col-md-5 pl-0">
      <!-- post thumbnail -->
  		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
  			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
  				<?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
  			</a>
  		<?php endif; ?>
  		<!-- /post thumbnail -->
    </div>
    <div class="col-md-7 p-0">
      <h3><?php the_title(); ?></h3>
        <div class="entry-content">
            <?php the_content(); ?>
        </div>
    </div>
</div>
</div>
<?php $i++; endwhile; ?>
