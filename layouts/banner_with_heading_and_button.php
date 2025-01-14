<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'banner_with_heading_and_button') : 

    // Get the subfields
    $banner_image = get_sub_field('banner_image'); // Banner heading
    $brand_logo = get_sub_field('brand_logo'); // Banner subheading
    $banner_heading = get_sub_field('banner_heading'); // Button text      
	$button_text = get_sub_field('button_text'); // Button text     
	?>    
   <section class="bsky_cta_large <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_cta_large_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_cta_large_inner">
                    <img src="<?php echo $banner_image; ?> " alt="" srcset="">
                    <div class="cta_large_text"> 
                        <div class="blue_sky_logo">
                            <img src="<?php echo $brand_logo; ?>" alt="" srcset="">
                        </div>
                        <div class="bsky_cta_large_text">
                             <h2 class="heading_2 text-white"><?php echo $banner_heading; ?> </h2>
                             <div class="orange_btn">
                                <a href="tel:<?php echo get_sub_field('link'); ?>" class="get_btn"><?php echo $button_text; ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
<?php endif ; ?>		