<?php

  if (get_row_layout() == 'section_with_left_image_and_right_content') : 
  
	$left_image = get_sub_field('left_image');
	$right_heading = get_sub_field('right_heading');
    $right_sub_heading = get_sub_field('right_sub_heading'); 
    $right_content = get_sub_field('right_content'); 
    
?> 


  <section class="bsky_zig_zag default_pb">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="img_side">
                            <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img_side_text img_side_text_new">
                            <h2 class="heading_2"><?php echo $right_heading; ?></h2>
                            <p class="default_body_large"><?php echo $right_sub_heading; ?></p>
                            <hr>
                            <p class="default_body_small color_dark_blue">
                                <?php echo $right_content; ?> 
                            </p>
                        </div> 
                    </div>
               </div>
            </div>
        </div>
    </div>
</section>





<?php endif; ?>