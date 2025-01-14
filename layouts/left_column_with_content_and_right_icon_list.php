<?php

  if (get_row_layout() == 'left_column_with_content_and_right_icon_list') : 
  
    // Get the subfields
	$left_heading = get_sub_field('left_heading');  
	$left_sub_heading = get_sub_field('left_sub_heading');
    $left_content = get_sub_field('left_content'); // Banner heading
    $btn_lnk = get_sub_field('btn_lnk'); // Banner subheading
    $button_text = get_sub_field('button_text'); // Button text      
	$brand_tagline = get_sub_field('brand_tagline'); // Button text 

?>  
<section class="bsky_zig_zag <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner bg_section">
               <div class="row flex-row-reverse ">
                    <div class="col-md-6">
                        <div class="img_side">
                            <ul class="list_style ">

								
                             <?php if (have_rows('icon_list')): ?>
							<?php while (have_rows('icon_list')): the_row(); 
								//$icon = get_sub_field('icon'); 
								$content = get_sub_field('icon_content'); 
							?>
								<li class="default_body">
									<span>
									
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/tick.svg" alt="" /> </span>
									
									
									<?php echo $content; ?>
								</li>
							<?php endwhile; ?>

					<?php else: ?>
						<p>No icons found.</p>
					<?php endif; ?>

                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img_side_text approch_text">
                            <?php if($left_heading){ ?>
                            <h5 class="heading_5"><?php echo $left_heading; ?></h5>
                            <?php } ?>
                            <h2 class="heading_2"><?php echo $left_sub_heading; ?></h2>
                            <p class="default_body_large color_dark_blue"><?php echo $left_content; ?></p>
                            <div class="orange_btn">
                                <a href="<?php echo $btn_lnk; ?>" class="get_btn"><?php echo $button_text; ?></a> <span class="default_caption_super_small small_gray"><?php echo $brand_tagline; ?></span> 
                            </div>
                        </div>
                    </div>
               </div>

            </div>
        </div>
    </div>
</section>

<?php endif; ?>