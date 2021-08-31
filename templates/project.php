<?php
$custom_terms = get_terms('project_categories'); ?>
<div class="projectPosts">
<div class="row m-0">
<?php foreach($custom_terms as $custom_term) {
    wp_reset_query();
    $args = array('post_type' => 'projects',
        'tax_query' => array(
            array(
                'taxonomy' => 'project_categories',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     );

     $loop = new WP_Query($args);

     if($loop->have_posts()) { ?>

<?php while($loop->have_posts()) : $loop->the_post();

		  ?>
	     <div class="col-lg-4 col-md-6 pb-5">
         <div class="customProjectEachTopicSec">
           <div class="projectPostFeatures">
             <?php if(has_post_thumbnail()){
               the_post_thumbnail();
             } ?>
           </div>
            <div class="projectEachTitle">
              <p class="projectEachCat">
                <?php the_terms($post->ID, 'project_categories');  ?>
              </p>
              <h2  class="customFaqTopicTitle">
              <a href="<?php the_permalink();?>"><?php echo get_the_title(); ?></a></h2>
            </div>

  					<div class="projectAuthorName">
              <p><?php echo get_the_author(); ?></p>
              <p><?php echo get_the_date(); ?></p>
  					 </div>
         </div>
         </div>
		<?php
         endwhile;   }
} ?>
</div>
</div>
