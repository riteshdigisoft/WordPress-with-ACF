<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'speciality_posts') :

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $see_all_link = get_sub_field('see_all_link'); // Banner subheading
	?>    

   <section class="bsky_our_specialty <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_our_specialty_outter">
            <div class="bsky_overall_wrapper"> 
                <div class="bsky_our_specialty_inner bg_section">
                    <div class="common_title">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <h3 class="heading_3"><?php echo $heading; ?></h3>
                            </div>
                            <div class="col-md d-none d-md-block">
                                <a href="<?php echo esc_url($see_all_link); ?>" class="common_title_btn">
                                    See All
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="specialty_cards">
                        <div class="specialty_cards_inner">
                            <div class="specialty_cards_slider">
							<?php
						  $column = get_sub_field('column'); 
						  if ($column){
							 foreach ($column as $value){
							  ?>
							  <div class="specialty_cards_slide">
								  <div class="specialty_card">
									<img src="<?php echo $value['image']; ?>" alt="Default Image" /> 
									<div class="specialty_card_text">
									  <p class="default_caption_title text-white"><?php echo $value['subtitle']; ?></p>
									  <h3 class="heading_3 text-white"><?php echo $value['title']; ?></h3>
									  <div class="orange_btn">
										<a href="<?php echo $value['link']; ?>" class="get_btn">Learn More</a>
									  </div>
									</div>
									<div class="overlay_img"></div>
								  </div>
								  </div>
							  <?php }
							} ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md d-block d-md-none">
	                    <a href="<?php echo esc_url($see_all_link); ?>" class="common_title_btn mobile_common_title_btn">
	                        See All
	                    </a>
	                </div>
                </div>
            </div>
        </div>
    </section>
	
	<?php endif; ?>	