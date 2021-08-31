<div class="indexFeaturesAll">
<?php
$custom_terms = get_terms('project_categories');
$x =0;
foreach($custom_terms as $custom_term){
  wp_reset_query();
  $args = array('post_type' => 'projects',
      'tax_query' => array(
          array(
              'taxonomy' => 'project_categories',
              'field' => 'slug',
              'terms' => $custom_term->slug,
              'order'       => 'DESC',
          ),
      ),
   );
   $the_query = new WP_Query($args);


?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post();

if($x==0){
  $active='active';
}
else {
  $active="notActive";
}


 ?>

<div class="indexFeatures <?php echo $active; ?>">

<img src="<?php echo get_template_directory_uri() . '/img/image.png'; ?>" />
<h2 class="featuresTitle"><?php the_terms($post->ID, 'project_categories');  ?></h2>
<a href="<?php the_permalink();?>" class="featuresLearnMore ">learn more</a>
</div>
<?php endwhile;
wp_reset_postdata(); ?>
<?php  endif;  $x++; }?>
</div>
