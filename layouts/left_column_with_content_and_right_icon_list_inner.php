<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'left_column_with_content_and_right_icon_list_inner') : 

    $left_heading = get_sub_field('left_heading'); 
	$left_sub_heading = get_sub_field('left_sub_heading');
    $left_sub_heading_2 = get_sub_field('left_sub_heading_2');
    $left_content = get_sub_field('left_content');	
	$btn_lnk = get_sub_field('btn_lnk'); 
	$button_text = get_sub_field('button_text'); 
	$right_heading = get_sub_field('right_heading'); 
    $tagline = get_sub_field('tagline');  	
	
?> 
 
<section class="bsky_zig_zag <?php echo get_sub_field('custom_class'); ?> without_bg_zig">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row align-items-center gap138">
                <div class="col-md-6">
                    <div class="faqs_text_side">
                        <div class="img_side_text approch_text">
                            <?php if($left_heading || $left_sub_heading){ ?>
                           <p class="default_body_large mb-2 color_dark_blue"><?php echo $left_heading ;?></p>
                             <h2 class="heading_2"><?php echo $left_sub_heading ;?></h2> 
                             <?php if($left_sub_heading_2){ ?>
                            <p class="default_body_large mb-2 color_dark_blue"><?php echo $left_sub_heading_2 ;?></p>
                            <?php }}?>
                            <hr>
                            <p class="default_body_small color_dark_blue mt-3"><?php echo $left_content ;?></p>
                            <div class="orange_btn mt-46">
                                <a href="<?php echo $btn_lnk ;?>" class="get_btn"><?php echo $button_text ;?></a>
								<span class="default_caption_super_small small_gray"><?php echo $tagline; ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-6">
                        <div class="img_side_text approch_text">
                        <?php if($right_heading){ ?>
                            <h5 class="heading_5"><?php echo $right_heading ;?></h5>
                            <?php }?> 
                            <ul class="list_style ">
							
							<?php if (have_rows('icon_list')): ?>

						  <?php while (have_rows('icon_list')): the_row(); 
								$icon_content = get_sub_field('icon_content'); // Field for the text content
							?>
								<li class="default_body">
									<span>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick.svg" alt="Tick Icon" />
									</span>
									<?php echo $icon_content; ?>
								</li>
							<?php endwhile; ?>

					<?php endif; ?>

																
                            </ul>
                        </div>
                    </div>
               </div>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>