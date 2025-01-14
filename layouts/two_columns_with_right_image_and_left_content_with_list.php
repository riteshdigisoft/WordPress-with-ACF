<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_right_image_and_left_content_with_list') : 

    // Get the subfields 
    $left_image = get_sub_field('left_image'); // Banner heading
	$right_heading = get_sub_field('right_heading'); // Banner heading
	$right_sub_heading = get_sub_field('right_sub_heading'); // Banner heading
	$right_content = get_sub_field('right_content');
	$call_button_text = get_sub_field('call_button_text');
	$learn_more_link = get_sub_field('learn_more_link');
	?>   
	
    <section class="bsky_zig_zag <?php echo get_sub_field('select_class');?>">
        <div class="bsky_zig_zag_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_zig_zag_inner bg_section">
                   <div class="row g-0 flex-row-reverse">
                       <div class="col-md-6">
                            <div class="img_side">
                                <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img_side_text approch_text">
                                <h5 class="heading_5"><?php echo $right_sub_heading; ?> </h5>
                                <h2 class="heading_2"><?php echo $right_heading; ?> </h2>
                                <p class="default_body_large color_dark_blue"><?php echo $right_content; ?></p>

                                <ul class="list_style ">
                                    <?php
                                    $solutions = get_sub_field('solutions');
                                    foreach ($solutions as $value) {
                                       ?>
                                        <li class="default_body">
                                            <span><img src="/wp-content/uploads/2024/12/tick.svg" alt="" srcset=""></span><?php echo $value['text']; ?>
                                        </li>
                                       <?php 
                                    }
                                    ?>
                                </ul>
                                <div class="orange_btn">
                                    <a href="<?php echo $learn_more_link; ?>" class="get_btn"><?php echo $call_button_text; ?></a>
                                    <span class="default_caption_super_small small_gray"><?php echo get_sub_field('text'); ?></span>
                                </div>
                            </div>
                        </div>
                   </div>

                </div>
            </div>
        </div>
    </section>	

<?php endif; ?>	
	