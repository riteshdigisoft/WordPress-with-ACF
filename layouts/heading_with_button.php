<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_button') :

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $button_text = get_sub_field('button_text'); // Banner subheading
    $button_link = get_sub_field('button_link'); // Button text     
	?>      
 <section class="bsky_cta default_py">
        <div class="bsky_cta_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_cta_inner">
                    <div class="common_title">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="heading_3"><?php echo $heading; ?></h3>
                            </div>
                            <div class="col-md">
                                <div class="outline_btn">
                                    <a href="<?php echo $button_link; ?>" class="get_btn"><?php echo $button_text; ?></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
<?php endif ; ?>	