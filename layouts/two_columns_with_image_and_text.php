<?php

  if (get_row_layout() == 'two_columns_with_image_and_text') : 
  
	
	$left_image = get_sub_field('left_image');
	$banner_btn_link = get_sub_field('banner_btn_link');
	$right_heading = get_sub_field('right_heading');
	$right_sub_heading = get_sub_field('right_sub_heading');
	$phoenix_office_address = get_sub_field('phoenix_office_address');
	$gilbert_office_address = get_sub_field('gilbert_office_address');
    
?> 

<section class="bsky_location default_py">
    <div class="bsky_location_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_location_inner">  

            <div class="common_title text-center">
                <p class="default_caption_caps">blue sky 365 — Offices</p>
                <h1 class="heading_1">Our Locations</h1>
            </div>


                          
						  
						  <?php if (have_rows('locations')): ?>
							<?php while (have_rows('locations')): the_row(); 
							$left_image = get_sub_field('left_image');
							$banner_btn_link = get_sub_field('banner_btn_link');
							$right_heading = get_sub_field('right_heading');
							$right_sub_heading = get_sub_field('right_sub_heading');
							$right_btn_txt = get_sub_field('right_btn_txt');
							$hours_of_operation = get_sub_field('hours_of_operation');
							$directions = get_sub_field('directions');
							$serving_tag = get_sub_field('serving_tag');
							?>
                          
						  
						              <div class="bsky_location_item default_pt">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bsky_location_card">
                            <?php echo $left_image; ?> 
                            <a href="<?php echo $banner_btn_link; ?>" class="serving_tag"><?php echo $serving_tag; ?></a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bsky_location_content">
                            <h2 class="heading_2"><?php echo $right_heading; ?></h2>
                            <p class="default_body_large color_dark_blue"><?php echo $right_sub_heading; ?></p>

                            <div class="btn_wd_link">
                                <div class="orange_btn">
                                    <a href="tel:<?php echo $right_btn_txt; ?>" class="get_btn">Call <?php echo $right_btn_txt; ?></a>
                                </div>
                                <a href="http://" class="link_btn">Get Directions</a>
                            </div>

                            <hr>

                            <div class="d-md-flex justify-content-between">
                                <div class="opertn_hour">
                                    <p class="default_body_small"><b>Hours of Operation:</b></p><br>
                                    <p class="default_body_small">
                                      <?php echo $hours_of_operation; ?>
                                    </p>
                                </div>
                                <div class="opertn_content">
                                    <p class="default_body_small"><?php echo $directions; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
						  
							<?php endwhile; ?>

					<?php else: ?>
						<p>No icons found.</p>
					<?php endif; ?>

			
		
			
        </div>
      </div>
    </div>
</section>

<?php endif; ?>