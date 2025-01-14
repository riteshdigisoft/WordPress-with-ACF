<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_left_image_and_right_content_inner') : 

    // Get the subfields
    $left_image = get_sub_field('left_image'); // Banner heading
	$right_heading = get_sub_field('right_heading'); // Banner heading
	$right_sub_heading = get_sub_field('right_sub_heading'); // Banner heading
	$right_content = get_sub_field('right_content');
	$call_button_text = get_sub_field('call_button_text');
    $call_button_link = get_sub_field('call_button_link');
	$learn_more_link = get_sub_field('learn_more_link');
    $custom_class = get_sub_field('custom_class');
	$single__column = get_sub_field('single__column');  
	
	
	?>   
	    <section class="bsky_zig_zag <?php echo $custom_class; ?>">
        <div class="bsky_zig_zag_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_zig_zag_inner">
                   <div class="row">
                    <?php if($left_image){ ?>
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
                        <?php } 
                        if($right_heading && $right_sub_heading && $right_content){
                         ?>
                        <div class="col-md-6">
                            <div class="img_side_text">
                                <h2 class="heading_2"><?php echo $right_heading; ?></h2>
                                <h5 class="default_body_large color_dark_blue"><?php echo $right_sub_heading; ?></h5>
                                <p class="default_body color_dark_blue"><?php echo $right_content; ?></p>
                                <div class="footer_btn">
                                    <?php if($call_button_text){ ?>
                                    <div class="orange_btn">
                                        <a href="<?php echo $call_button_link; ?>" class="get_btn"><?php echo $call_button_text; ?></a>
                                    </div>
                                    <?php } ?>
                                    <?php if($learn_more_link){ ?>
                                    <a href="<?php echo $learn_more_link; ?>" class="link_btn">
                                        Learn More
                                    </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                       <?php } ?>
                   </div>
				   
				 <div class="row g-0 custom_gap">
				 
						<?php if (have_rows('two_columns')): ?>
							<!-- <div class="row"> -->
								<?php while (have_rows('two_columns')): the_row(); ?>
									<?php 
										$column_heading = get_sub_field('column_heading'); 
										$column_content = get_sub_field('column'); 
									?>
									<div class="col-md-6">
										<div class="blue_card">
											<div class="blue_card_inner">
												<!-- Heading -->
												<?php if (!empty($column_heading)): ?>
													<div class="blue_card_title">
														<h5 class="heading_5"><?php echo $column_heading; ?></h5>
													</div>
												<?php endif; ?>


												<?php if (!empty($column_content)): ?>
													<p class="default_body_small color_dark_blue">
														<?php echo esc_html($column_content); ?>
													</p>
												<?php endif; ?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<!-- </div> -->
						<?php endif; ?>
				

                <div class="col-md-12">
                    <div class="notice_card">
              <?php if (!empty($single__column)): ?>
                        <div class="notice_card_inner">
                            
                            <p class="default_body_small">
                                 <?php echo $single__column; ?>
                            </p>

                        </div>
                                  <?php endif; ?> 
                    </div>
                </div>
				
				
				
               </div>  

                </div>
            </div>
        </div>
    </section>
	
	<?php endif ; ?>