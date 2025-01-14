<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_subheading_with_posts') : 

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $subheading = get_sub_field('subheading'); // Banner subheading
    //$banner_heading = get_sub_field('banner_heading'); // Button text      
	//$button_text = get_sub_field('button_text'); // Button text     
	?> 

<section class="bsky_clickable_card default_py">
    <div class="bsky_clickable_card_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_clickable_card_inner">
            <div class="center_title default_pb">
                <h2 class="heading_2 d-inline-block blue_line"><?php echo $heading; ?></h2>
                <p><?php echo $subheading ;?></p>
            </div>
            <div class="row blue_card_click">
			
			

				
    <?php
    // Create a new WP_Query for the 'commercial' post type
    $args = array(
        'post_type'      => 'commercial', // Post type name
        'posts_per_page' => 6, 
    'orderby'        => 'date',       // Order by date
    'order'          => 'ASC',       // DESC for newest first, ASC for oldest first		// Limit the number of posts displayed
    );
    $query = new WP_Query( $args );   

    // Start the loop
    if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="clickable_card">
                    <div class="clickable_card_inner">
                        <?php 
                        // Check if the post has a featured image and display it
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail('full', array('class' => 'card_icon'));
                        else :
                            // Fallback image if no featured image is found
                            echo '<img src="assets/images/default_image.jpg" alt="Default Image" class="card_icon">';
                        endif;
                        ?>

                        <h3 class="heading_3"><?php echo get_the_title(); ?></h3>
                        <p class="default_body"><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="stretched-link learn_more">Learn More</a>
                </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata(); // Reset the query
    else :
        echo '<p>No commercial posts found.</p>';
    endif;
    ?>
				

            </div>            
        </div>
      </div>
    </div>
</section>

<?php endif; ?>