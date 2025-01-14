<?php 
  if (get_row_layout() == 'contact_form_with_image') : 
  $subheading = get_sub_field('subheading'); // Ensure this matches your ACF field name
$logo = get_sub_field('logo');             // Ensure this matches your ACF field name
$heading = get_sub_field('heading');  
 
    ?>     
<section class="bsky_profesn <?php echo get_sub_field("custom_class"); ?> lets_chat">
    <div class="bsky_profesn_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_profesn_inner bg_section">
                <div class="row">
                    <div class="col-md col-lg-auto">
                        <div class="table_side">
                            <div class="bookform">     
							<?php if (!empty($subheading)) { ?>
							<h3 class="heading_3"><?php echo $subheading; ?></h3> 
						<?php } ?>

							<?php
                               if (!empty($logo) && !empty($heading)) { ?>
								<h4 class="contact_form_title">
									<img src="<?php echo $logo; ?>" alt="" class="">
									<a href="#" class="default_body_large"><?php echo $heading; ?></a>
								</h4>
							<?php } ?>
                                <?php echo get_sub_field("form_shortcode"); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-auto col-lg">
                        <div class="bsky_profesn_img">
                            <img src="<?php echo get_sub_field("right_image"); ?>" alt="" class="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif ; ?>    