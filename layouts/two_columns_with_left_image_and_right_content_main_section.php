<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_left_image_and_right_content_main_section') : 

    // Get the subfields
    $left_image = get_sub_field('left_image'); // Banner heading
	$right_heading = get_sub_field('right_heading'); // Banner heading
	$right_sub_heading = get_sub_field('right_sub_heading'); // Banner heading
	$right_content = get_sub_field('right_content');
	$call_button_text = get_sub_field('call_button_text');
	$learn_more_link = get_sub_field('learn_more_link');
    $custom_class = get_sub_field('custom_class');
	?>   
	    <section class="bsky_zig_zag <?php echo $custom_class; ?>">
        <div class="bsky_zig_zag_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_zig_zag_inner">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="img_side">
                                <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                                <?php
                                $logos = get_sub_field("logos");
                                ?>
                                <div class="overlay_img"></div>
                                <div class="arizona_logos">
                                <ul>
                                <?php
                                foreach ($logos as $value) {
                                 ?>
                                 <li>
                                    <img src="<?php echo $value['image']; ?>" alt="" class="rating_img">
                                </li>
                                 <?php
                                    }
                                 ?>
                                 </ul>
                                 </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img_side_text">
                                <h5 class="default_caption_caps"><?php echo $right_heading; ?></h5>
                                <h1 class="heading_1"><?php echo $right_sub_heading; ?></h1>
                                <p class="default_body color_dark_blue"><?php echo $right_content; ?></p>

                                <div class="footer_btn">
                                    <?php if(get_sub_field('learn_more_link') && get_sub_field('learn_more')){ ?>
                                    <div class="orange_btn">
                                        <a href="<?php echo get_sub_field('learn_more_link'); ?>" class="get_btn"><?php echo get_sub_field('learn_more'); ?></a>
                                    </div>
                                    <?php }?>
                                    <a href="<?php echo get_sub_field('call_button_link'); ?>" class="link_btn">
                                        <?php echo get_sub_field('call_button_text'); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
	
	<?php endif ; ?>