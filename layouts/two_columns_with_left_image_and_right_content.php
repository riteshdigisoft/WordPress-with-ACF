<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_left_image_and_right_content') : 

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
                   <div class="row">
                        <div class="col-md-6">
                            <div class="img_side">
                                <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                                <?php
                                $logos = get_sub_field("logos");
                                if($logos){
                                ?>
                                <div class="overlay_img"></div>
                                <div class="arizona_logos">
                                <ul>
                                <?php
                                foreach ($logos as $value) {
                                    if($value['text']){
                                 ?>
                                 <li>
                                    <div class="arizona_text">
                                        <img src="<?php echo $value['image']; ?>" alt="" class="arizona_img">
                                        <p><?php echo $value['text']; ?></p>
                                    </div>
                                </li>
                                <?php }
                                else{
                                 ?>
                                 <li>
                                    <img src="<?php echo $value['image']; ?>" alt="" class="rating_img">
                                </li>
                                 <?php }
                                 }
                                 ?>
                                 </ul>
                                 </div>
                                 <?php
                                    }
                                 ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img_side_text">
                                <?php if($right_heading){ ?>
                                <p class="default_caption_caps"><?php echo $right_heading; ?></p>
                                <?php }?>
                                <h2 class="heading_2 color_blue"><?php echo $right_sub_heading; ?></h2>
                                <p class="default_body color_dark_blue"><?php echo $right_content; ?></p>

                                <div class="footer_btn">
                                    <?php if($call_button_text){ ?>
                                    <div class="orange_btn">
                                        <a href="<?php echo get_sub_field("phone_link"); ?>" class="get_btn"><?php echo $call_button_text; ?></a>
                                    </div>
                                    <?php } 
                                    if(get_sub_field("learn_more")){
                                    ?>
                                    <a href="<?php echo $learn_more_link; ?>" class="link_btn">
                                        <?php echo get_sub_field("learn_more");?>
                                    </a>
                                     <?php } ?>
                                </div>
                            </div>
                        </div>
                   </div>

                </div>
            </div>
        </div>
    </section>
	
	<?php endif ; ?>