<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'left_image_with_right_content_and_button') : 

    $left_image = get_sub_field('left_image'); 
    $right_heading = get_sub_field('right_heading');
	$right_sub_heading = get_sub_field('right_sub_heading');
	$right_content = get_sub_field('right_content');
	$btn_lnk = get_sub_field('btn_lnk');
?> 
<section class="bsky_zig_zag">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner sec-border">
               <div class="row align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6">
                        <div class="img_side">
                            <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img_side_text img_side_text_new">
                            <h2 class="heading_2"><?php echo $right_heading; ?></h2>
                            <p class="default_body_large color_dark_blue"><?php echo $right_sub_heading; ?> </p>
                            <p class="default_body color_dark_blue">
                               <?php echo $right_content; ?>
                            </p>
                            <div class="footer_btn">
                                <div class="orange_btn">
                                    <a href="<?php echo $btn_lnk; ?>" class="get_btn">Learn More</a>
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