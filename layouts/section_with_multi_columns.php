<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'section_with_multi_columns') : 

    // Get the subfields 
    // Get the subfields
    $left_image = get_sub_field('left_image'); // Banner heading
	$right_heading = get_sub_field('right_heading'); // Banner heading
	$right_sub_heading = get_sub_field('right_sub_heading'); // Banner heading
	$right_content = get_sub_field('right_content');
    $custom_class = get_sub_field('custom_class');
    $call_button_text = get_sub_field('call_button_text');
    $call_button_link = get_sub_field('call_button_link');
	$learn_more_link = get_sub_field('learn_more_link');

	?>   

<section class="bsky_zig_zag <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row">
                    <div class="col-md-6">
                        <div class="img_side">
                            <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img_side_text img_side_text_new">
                            <h2 class="heading_2"><?php echo $right_heading; ?></h2>
                            <h5 class="default_body color_dark_blue"><?php echo $right_sub_heading; ?></h5>
                            <hr>
                            <p class="default_body_small color_dark_blue">
                               <?php echo $right_content; ?>
                            </p>
                                  <?php if($call_button_text){ ?>
                                  <div class="footer_btn">
                                    <div class="orange_btn">
                                        <a href="<?php echo $call_button_link; ?>" class="get_btn"><?php echo $call_button_text; ?></a>
                                    </div>
                                    <?php }?>
                                    <?php if($learn_more_link){ ?>
                                    <a href="<?php echo $learn_more_link; ?>" class="link_btn">
                                        Learn More
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
               </div>
               <div class="row g-0 custom_gap">
			   
          <?php if (have_rows('three_columns')): ?>
							<!-- <div class="row"> -->
								<?php while (have_rows('three_columns')): the_row(); ?>
									<?php 
										$column_heading = get_sub_field('column_heading'); 
										$column_content = get_sub_field('column'); 
									?>  
									<div class="col-md-4">
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
				
               </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>