<?php 
  if (get_row_layout() == 'contact_form_with_left_content') : 
 
    ?>     
<section class="bsky_zig_zag">
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row">
                    <div class="col-md-6">
                        <div class="img_side_text img_side_text_new icon_wd_form">
                            <div class="icon_title">
                                <img src="<?php echo get_sub_field("icon"); ?>" alt="" class="icon_title_icon">
                                <h2 class="icon_title_main"><?php echo get_sub_field("heading"); ?></h2>
                            </div>
                            <h5 class="default_body_large color_dark_blue mb-0"><?php echo get_sub_field("text"); ?></h5>
                            <hr>
                            <?php echo get_sub_field("description"); ?>
                            <div class="footer_btn">
                                <div class="orange_btn">
                                    <a href="<?php echo get_sub_field("btn_link"); ?>" class="learn_more"><?php echo get_sub_field("btn_txt"); ?></a>
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