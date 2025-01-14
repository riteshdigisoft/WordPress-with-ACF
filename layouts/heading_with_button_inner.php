<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_button_inner') :

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $image = get_sub_field('image'); // Banner subheading
    $sub_heading = get_sub_field('sub_heading'); // Button text     
?>   
	
	
	
<section class="bsky_cta <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_cta_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_cta_inner bsky_cta_inner2">
                <div class="common_title">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <div class="cta_content_left heading_3 text-white">
                                <img src="<?php echo $image; ?>" alt="" srcset="">
                                  <?php echo $heading; ?> 
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="cta_content default_body text-white">
							   <?php echo $sub_heading; ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php endif; ?>	