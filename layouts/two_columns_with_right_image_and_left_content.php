<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_right_image_and_left_content') : 

    // Get the subfields
    $right_image = get_sub_field('right_image'); // Banner heading
	$left_heading = get_sub_field('left_heading'); // Banner heading
	$left__ = get_sub_field('left__'); // Banner heading
	$right_content = get_sub_field('right_content');
	//$call_button_text = get_sub_field('call_button_text');
	//$learn_more_link = get_sub_field('learn_more_link');
 
	?>     
	
	
	    <section class="bsky_profesn <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_profesn_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_profesn_inner bg_section">
                    <div class="row">
                        <div class="col-md">
                            <div class="bsky_profesn_text">
                                <h3 class="heading_3"><?php echo $left_heading; ?></h3>
                                <p class="default_body color_dark_blue"><?php echo $left__ ; ?> </p>
                                
                                <div class="bsky_profesn_outter">
                                    <div class="bsky_profesn_list">
                                        <ul class="list_style">
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
                                        <ul class="list_style">
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
                        <div class="col-auto">
                            <div class="bsky_profesn_img">
                                <img src="<?php echo $right_image; ?>" alt="" class=""> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
	
<?php endif ; ?>	