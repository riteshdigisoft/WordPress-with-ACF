<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_four_columns') : 

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $sub_heading = get_sub_field('sub_heading'); // Banner subheading
    //$banner_heading = get_sub_field('banner_heading'); // Button text      
	//$button_text = get_sub_field('button_text'); // Button text     
	?> 

<section class="bsky_bluebg_cards default_pb">
    <div class="bsky_bluebg_cards_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_bluebg_cards_inner bg_section">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="heading_3"><?php echo $heading; ?> </h3>
                    </div>
                    <div class="col-md-6">
                        <div class="default_body"><?php echo $sub_heading;  ?></div>
                    </div>
                </div>
                <div class="row blue_card_gap">
				
				
				      <?php if( have_rows('columns') ): ?>
						<?php $counter = 0; // Initialize counter ?>
						<?php while( have_rows('columns') ): the_row(); ?>

							<div class="col-md-3">
								<div class="bluebg_card">
									<div class="bluebg_card_inner">
										<img src="<?php the_sub_field('column_image'); ?>" alt="" class="card_icon">
										<p class="default_body"><?php the_sub_field('column_heading'); ?></p>

										<?php if( $counter === 2 ): // Check if it's the 3rd card ?>
											<p class="default_caption_super_small">
												<?php the_sub_field('column_content'); ?>
											</p>
										<?php endif; ?>
									</div>
								</div>
							</div> 
							<?php $counter++; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				
                    </div>
					
					
                </div>   
            </div>
        </div>
    </div>
</section>


<?php endif ; ?>		