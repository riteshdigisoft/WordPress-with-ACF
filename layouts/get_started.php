<?php 
  if (get_row_layout() == 'get_started') :
?>  
<section class="bsky_resources default_pt">
    <div class="bsky_resources_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_resources_inner">  

            <div class="common_title text-center mb-0">
                <p class="default_caption_caps"><?php echo get_sub_field("sub_heading"); ?></p>
                <h1 class="heading_1"><?php echo get_sub_field("heading"); ?></h1>
                <div class="orange_btn mt-46">
                    <a href="<?php echo get_sub_field("button_link"); ?>" class="get_btn"><?php echo get_sub_field("button_text"); ?></a>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>

<?php endif ; ?>    