<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_subheading_with_two_columns') : 

    // Get the subfields 
    $heading = get_sub_field('heading'); // Banner heading
	$content = get_sub_field('content'); // Banner heading
	$left_image = get_sub_field('left_image'); // Banner heading
	$right_image = get_sub_field('right_image');
	$heading_class = get_sub_field('heading_class');
	$select_columns = get_sub_field('select_columns');
 
	?>  
	
	    <section class="bsky_serving <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_serving_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_serving_inner">
                    <div class="common_title">
                        <div class="row align-items-center">
						
                            <div class="<?php if($select_columns == '6/6'){ echo "col-md-6"; }else{ echo "col-md-4"; } ?>">
                                <h2 class="heading_2"><?php echo $heading; ?></span></h2>
                            </div>
							
                            <div class="<?php if($select_columns == '6/6'){ echo "col-md-6"; }else{ echo "col-md-8"; } ?>">
                                <div class="bsky_serving_text">
                                   <p class="default_body color_dark_blue"><?php echo $content; ?></p>
                                </div>
                            </div>
							
                        </div>
                    </div>

                    <div class="row">
                        <?php
                            $location = get_sub_field("location");
                            foreach ($location as $value) {
                             ?>
                             <div class="col-md-6">
                                <div class="serving_img">
                                    <img src="<?php echo $value['image']; ?>" alt="" srcset="">
                                    <a href="<?php echo $value['location_link']; ?>" class="serving_tag default_body"><?php echo $value['location']; ?></a>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php endif; ?>		
	