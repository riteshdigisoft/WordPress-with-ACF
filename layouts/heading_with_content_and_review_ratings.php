<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_content_and_review_ratings') : 

    // Get the subfields 
    $heading = get_sub_field('heading');
    $content = get_sub_field('content');
	$heading_inner = get_sub_field('heading_inner');
	$button_text = get_sub_field('button_text');
	?>    
	
    <section class="bsky_testimonial <?php echo get_sub_field('custom_class');?>">
        <div class="bsky_testimonial_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_testimonial_inner">
					<?php if (!empty($heading_inner) || !empty($button_text)): ?>
						<div class="common_title">
							<div class="row align-items-center">
								<?php if (!empty($heading_inner)): ?>
									<div class="col-auto">
										<h2 class="heading_2"><?php echo esc_html($heading_inner); ?></h2>
									</div>
								<?php endif; ?>

								<?php if (!empty($button_text)): ?>
									<div class="col-md">
										<div class="orange_btn common_title_btn">
											<a href="tel:+<?php echo esc_attr($button_text); ?>" class="get_btn">
												Call Now <?php echo esc_html($button_text); ?>
											</a>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>  
					<?php endif; ?>

                    <?php if($heading || $content ){ ?>
                    <div class="bsky_huge_title">
                        <div class="bsky_huge_title">   
                            <h2 class="common_h1"><?php echo $heading; ?></span></h2>
                        </div>
                        <p class="default_body_large color_dark_blue"><?php echo $content; ?></p>
                    </div>
                    <?php
                    } 
                    $logos = get_sub_field("logos");
                    if($logos){
                     ?>
                    <div class="testimonial_sponsor">
                        <ul>
                            <?php
                                foreach ($logos as $value) {
                                 ?>
                                <?php                                    ?>
                                <li>
                                    <img src="<?php echo $value['logo_image'];  ?>" alt="" class="rating_img">
                                </li>
                                    <?php
                                }
                            ?>
                        </ul>

                    </div>
                    <?php       
                    }
                    ?>
                    <div class="testimonial_slider">
                         <?php
                                $reviews = get_sub_field("reviews");
                                foreach ($reviews as $value) {
                                    ?>
                                   <div class="testimonial_card">
                                        <div class="testimonial_card_inner">
                                            <img src="<?php echo $value['logo']; ?>" alt="" class="customer_img">
                                            <div class="customer_name">
                                                <p><?php echo $value['review_heading']; ?></p><span class="customer_location"><?php echo $value['location']; ?></span>
                                                <div class="star_rating">
                                                    <?php 
                                                    $count = $value['star_rating'];
                                                    for ($i=1; $i <= $count ; $i++) { 
                                                        ?>
                                                    <img src="/wp-content/uploads/2024/12/Star.svg" alt="">
                                                     <?php
                                                    } ?>
                                                    <img src="" alt="" srcset="">
                                                </div>
                                            </div>
                                            <p class="custoner_review default_body_small">
                                                <?php echo $value['content']; ?>
                                            </p>
                
                                        </div>
                                    </div>
                                    <?php 
                                    }
                                 ?>
                    </div>


                </div>
            </div>
        </div>
    </section>	
<?php endif ; ?>
<style>
    .star_rating {
    display: flex;
}
.star_rating img {
    padding: 0px 1px;
}
</style>		
	