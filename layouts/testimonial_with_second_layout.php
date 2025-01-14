<?php 
if (get_row_layout() == 'testimonial_with_second_layout') :  

$phone_link = get_sub_field("phone_link");  
$phone = get_sub_field("phone");  
 
?>    
<section class="bsky_fellow_testimonial <?php echo get_sub_field("custom_class");?>">
<div class="bsky_fellow_testimonial_outter">
    <div class="bsky_overall_wrapper">
        <div class="bsky_fellow_testimonial_inner">
            <div class="common_title">
                <div class="row align-items-center">
                  <div class="col-md">
                    <h2 class="heading_2"><?php echo get_sub_field("heading");?></h2>
                  </div>
                  <div class="col-auto d-none d-md-block">
				  <?php 
				  if(!empty($phone_link)){ ?>
					  
                    <div class="orange_btn common_title_btn">
                        <a href="<?php echo $phone_link;?>" class="get_btn"><?php echo $phone;?></a>
                    </div>
				  <?php } ?>
                  </div>
                </div>
              </div>
            <div class="testimonial_slider">
                <?php 
                $testimonial = get_sub_field("testimonial");
                foreach ($testimonial as $value) {
                ?>
                <div class="fellow_testimonial_card">
                    <div class="fellow_testimonial_card_inner">
                        <div class="client-details">
                            <div class="customer_name">
                                <p><?php echo $value['title']; ?></p><span class="customer_location"><?php echo $value['location']; ?></span>
                            </div>
                            <img src="<?php echo $value['icon']; ?>" alt="" class="customer_img">
                        </div>
                        
                        <p class="custoner_review default_body_small">
                           <?php echo $value['content']; ?>
                        </p>
                        <div class="star_rating">
                            <?php 
                            $count = $value['rating'];
                            for ($i=1; $i <= $count ; $i++) { 
                                ?>
                            <img src="/wp-content/uploads/2024/12/Star.svg" alt="">
                             <?php
                            } ?>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
             <div class="col-md d-block d-md-none">
                <?php if(get_sub_field("phone_link") && get_sub_field("phone")){ ?>
                <div class="orange_btn common_title_btn">
                    <a href="<?php echo get_sub_field("phone_link");?>" class="get_btn"><?php echo get_sub_field("phone");?></a>
                </div>
            <?php }?>
             </div>
        </div>
    </div>
</div>
</section>
<?php endif ; ?>