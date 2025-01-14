<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_subheading_with_map') : 

    // Get the subfields 
    $heading = get_sub_field('heading'); // Banner heading
	$subheading = get_sub_field('subheading'); // Banner heading
	$embeded_map = get_sub_field('embeded_map'); // Banner heading
	
 
	?>  
<section class="bsky_map <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_map_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_map_inner">
                <div class="common_title">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="heading_2"><?php echo $heading; ?></span></h2>
                        </div>
                        <div class="col-md-6">
                            <div class="bsky_serving_text">
                               <p class="default_body color_blue "><?php echo $subheading; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serving_img">
						<?php echo $embeded_map; ?>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>