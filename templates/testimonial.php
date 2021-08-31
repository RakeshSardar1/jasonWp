<div class="indexTestimonial">
  <div class="container">
<?php
$args = array( 'post_type' => 'testimonial', 'posts_per_page' => 1);
$the_query = new WP_Query( $args );
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <div class="indexTestimonialBox">
    <div class="testimonialComma">
<img src="<?php echo get_template_directory_uri() . '/img/icons/comma.png'; ?>" />
    </div>
  <div class="testmonialContent">
    <?php the_content(); ?>
  </div>

<div class="testThumb">
  <?php if(has_post_thumbnail()){
    the_post_thumbnail('medium');
  } ?>
</div>

<p class="testimonialTitle <?php echo $color;?>"><?php the_title(); ?></p>
<p class="testDesignation"><?php
echo get_post_meta( get_the_ID(), 'designation', true );
?></p>

</div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php endif; ?>
</div>
</div>
