<?php

  if (get_row_layout() == 'left_image_with_right_content_and_button_inner') : 
  
      // Get the subfields
	$left_image = get_sub_field('left_image');
	$left__heading = get_sub_field('left__heading');
    $right_heading = get_sub_field('right_heading'); // Banner heading
    $right_sub_heading = get_sub_field('right_sub_heading'); // Banner subheading
    $right_content = get_sub_field('right_content'); // Button text      
	$btn_lnk = get_sub_field('btn_lnk'); // Button text 
    //$brand_icons = get_sub_field('brand_icons'); 


?>
<section class="bsky_zig_zag default_pt common_banner">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row g-0 align-items-center">
                    <div class="col-md-6">
                        <div class="img_side">
                            <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                            <h5><?php echo $left__heading; ?></h5>  
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img_side_text">
                            <p class="default_caption_caps"><?php echo $right_heading; ?></p>
                            <h1 class="heading_1"><?php echo $right_sub_heading; ?></h1>
                            <p class="default_body color_dark_blue"><?php echo $right_content; ?> </p>

                            <div class="footer_btn">
                                <div class="orange_btn">
                                    <a href="<?php echo $btn_lnk; ?>" class="get_btn"><?php echo get_sub_field('btn_txt'); ?></a>
                                </div>
                                <div class="customer_follow">
                                    <img src="<?php echo get_sub_field('image'); ?>" alt="" srcset="">
                                    <p><?php echo get_sub_field('text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>