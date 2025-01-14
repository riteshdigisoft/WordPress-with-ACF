<?php 
  if (get_row_layout() == 'contact_section') : 
 
    ?>     
<section class="bsky_zig_zag default_py common_banner contact_sec">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner ">
               <div class="row g-0">
                    <div class="col-sm-6">
                        <div class="img_side">
                            <img src="<?php echo get_sub_field('image'); ?>" alt="" class="img_side_img">
                            <div class="common_banner-btn">
                                <div class="orange_btn">
                                    <a href="<?php echo get_sub_field('phone_link'); ?>" class="get_btn bg-white"><?php echo get_sub_field('phone'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="img_side_text">
                            <h5 class="default_caption_caps"><?php echo get_sub_field('sub_heading'); ?></h5>
                            <h1 class="heading_1"><?php echo get_sub_field('heading'); ?></h1>

                                 <div class="footer_address row">
                                    <?php
                                    $address = get_sub_field('address');
                                    foreach ($address as $value) {
                                     ?>
                                    <div class="col-md-6">
                                        <div class="footer_address_inner">
                                            <p class="default_body_large"><?php echo $value['title']; ?></p>
                                            <p class="default_caption_titles"><?php echo $value['description']; ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                        </div>
                    </div>
               </div>

            </div>
        </div>
    </div>
</section>

<?php endif ; ?>    