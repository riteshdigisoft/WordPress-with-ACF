<?php

  if (get_row_layout() == 'banner_with_heading_and_subgeading_with_button') : 
  
	
	$banner_image = get_sub_field('banner_image');
	$banner_heading = get_sub_field('banner_heading');
	$banner_subheading = get_sub_field('banner_subheading');
	$button_text = get_sub_field('button_text');
	$button_link = get_sub_field('button_link');
	$banner_logo = get_sub_field('banner_logo');
	$get_started_btn_txt = get_sub_field('get_started_btn_txt');
	$get_started_btn_link = get_sub_field('get_started_btn_link');
    
?> 



<section class="bsky_consultation <?php echo get_sub_field('custom_class');?>"> 
    <div class="bsky_consultation_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_consultation_inner">  
            <img src="<?php echo $banner_image; ?>" alt="" srcset="">
            <div class="bsky_consultation_text">
                <div class="row">
                    <div class="col-md-auto">
                        <div class="consultation_cont">
                            <h2 class="heading_2 text-white"><?php echo $banner_heading; ?></h2>
                            <h5 class="default_body_large text-white mt-46"><?php echo $banner_subheading; ?> </h5>
                            <div class="orange_btn">
                                <a href="<?php echo $button_link; ?>" class="get_btn"><?php echo $button_text; ?></a>
                            </div>
                            <?php 
                            if($get_started_btn_txt){
                            ?>
							<div class="outline_btn">
							     <a href="<?php echo $get_started_btn_link; ?>" class="get_btn"><?php echo $get_started_btn_txt; ?></a> 
							</div>
                        <?php } ?>
                        </div> 
                    </div> 
                    <div class="col-md">
                        <img src="<?php echo $banner_logo; ?> " alt="" srcset="">
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>








<?php endif; ?>