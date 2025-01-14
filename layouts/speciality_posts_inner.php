<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'speciality_posts_inner') : 

    $heading = get_sub_field('heading'); // Banner heading 
    $posts = get_sub_field('posts'); // Button text       

	?>   
	
<section class="bsky_our_specialty <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_our_specialty_outter">
        <div class="bsky_overall_wrapper"> 
            <div class="bsky_our_specialty_inner bg_section">
                <div class="common_title">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="text-center heading_2"><?php echo $heading; ?></h2>
                        </div>
                    </div>
                </div>

                <div class="specialty_cards">
                    <div class="specialty_cards_inner">
                        <div class="row">
						
						
					<?php if (have_rows('services_column')): ?>
						<!-- <div class="row"> -->
							<?php while (have_rows('services_column')): the_row(); ?>
								<?php 
									$service_image = get_sub_field('service_image'); 
									$service_heading = get_sub_field('service_heading'); 
									$service_sub_heading = get_sub_field('service_sub_heading'); 
									$button_link = get_sub_field('button_link'); 
									$button_txt = get_sub_field('button_txt'); 
								?>
								<div class="col-md-6">
									<div class="specialty_card">
										<?php if ($service_image): ?>
											<img src="<?php echo esc_url($service_image); ?>" alt="" class="img-fluid">
										<?php endif; ?>
										<div class="specialty_card_text">
											<?php if ($service_heading): ?>
												<p class="default_caption_title text-white"><?php echo esc_html($service_heading); ?></p>
											<?php endif; ?>
											<?php if ($service_sub_heading): ?>
												<h3 class="heading_3 text-white"><?php echo esc_html($service_sub_heading); ?></h3>
											<?php endif; ?>
											<?php if (!empty($button_link) && !empty($button_txt)): ?>
												<div class="orange_btn">
													<a href="<?php echo esc_url($button_link); ?>" class="get_btn"><?php echo esc_html($button_txt); ?></a>
												</div>
											<?php ?>
											<?php endif; ?>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<!-- </div> -->
					<?php else: ?>
						<p>No columns found.</p>
					<?php endif; ?>

							
							
                        </div>
                    </div>
                </div>
				
				
            </div>
        </div>
    </div>
</section>	
	

<?php endif; ?>	