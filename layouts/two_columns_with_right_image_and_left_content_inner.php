<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_right_image_and_left_content_inner') : 

    // Get the subfields
    $right_image = get_sub_field('right_image'); // Banner heading
	$left_heading = get_sub_field('left_heading'); // Banner heading
	$left__ = get_sub_field('left__'); // Banner heading
	$right_content = get_sub_field('right_content');
	//$call_button_text = get_sub_field('call_button_text');
	//$learn_more_link = get_sub_field('learn_more_link');
 
	?>     
	
	
<section class="bsky_zig_zag <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper ">
            <div class="zig_zag_border">
                <div class="bsky_zig_zag_inner border_section">
                    <div class="row">
                     <div class="col-lg-8">
                         <div class="img_side_text img_side_text_new">
                             <h3 class="heading_3"><?php echo $left_heading; ?></h3>
                             <h5 class="default_body color_dark_blue"><?php echo $left__ ; ?></h5>
                            
                             <div class="bsky_profesn_outter">
                                <div class="bsky_profesn_list">
                                    <ul class="list_style ft-15">
                                        <?php
                                        $left_column = get_sub_field("left_column");
                                        foreach ($left_column as $value) {
                                           ?>
                                           <li class="default_body_small color_dark_blue">
                                            <span><img src="<?php echo $value['icon'] ;  ?>" alt="" srcset=""></span>
                                            <?php echo $value['list_text'] ;  ?>
                                        </li>
                                           <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="bsky_profesn_list">
                                    <ul class="list_style ft-15">
                                        <?php
                                        $right_column = get_sub_field("right_column");
                                        foreach ($right_column as $value) {
                                           ?>
                                           <li class="default_body_small color_dark_blue">
                                            <span><img src="<?php echo $value['icon'] ;  ?>" alt="" srcset=""></span>
                                            <?php echo $value['list_text'] ;  ?>
                                        </li>
                                           <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                         
                         </div>
                     </div>
                         <div class="col-lg-4">
                             <div class="img_side">
                                 <img src="<?php echo $right_image; ?>" alt="" class="img_side_img">
                             </div>
                         </div>
                    </div>
                 </div>
                 <div class="bsky_cta_inner border_section">
                     <div class="bsky_cta_outter">
                        <div class="bsky_cta_inner">
                            <div class="common_title">
                                <div class="row align-items-center">
                                    <div class="col-md">
                                        <h3 class="heading_3"><?php echo get_sub_field('heading'); ?></h3>
                                    </div>
                                    <div class="col-auto">
                                        <div class="orange_btn">
                                            <a href="<?php echo get_sub_field('button_link'); ?>" class="get_btn"><?php echo get_sub_field('button_text'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</section>
	
	
<?php endif ; ?>	