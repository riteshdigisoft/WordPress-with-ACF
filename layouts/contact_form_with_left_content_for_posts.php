<?php 
  if (get_row_layout() == 'contact_form_with_left_content_for_posts') : 
    ?>     
    <section class="bsky_zig_zag <?php echo get_sub_field("custom_class");?>">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row">
                    <div class="col-md-6">
                        <div class="img_side_text img_side_text_new">
                            <p class="default_caption_caps"><?php echo get_sub_field("sub_heading");?></p>
                            <h2 class="heading_2"><?php echo get_sub_field("heading");?></h2>
                            <?php echo get_sub_field("description");?>
                            <div class="footer_btn">
                                <div class="orange_btn">
                                    <a href="<?php echo get_sub_field("btn_link"); ?>" class="get_btn"><?php echo get_sub_field("btn_txt"); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table_side bg_section">
                            <div class="bookform">
                                <h4 class="form_title">
                                    <?php echo get_sub_field("form_heading"); ?>
                                    <a href="<?php echo get_sub_field("phone_link"); ?>"><?php echo get_sub_field("phone"); ?></a>
                                </h4>
                                <?php echo get_sub_field("form_shortcode"); ?>
                            </div>
                        </div>
                    </div>
               </div>
               
            </div>
        </div>
    </div>
</section>

<?php endif ; ?>        