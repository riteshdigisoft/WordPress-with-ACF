<?php 
  if (get_row_layout() == 'contact_map') : 
 
    ?>     
<section class="bsky_map default_pb">
    <div class="bsky_map_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_map_inner">
                <div class="common_title">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="heading_2 "><?php echo get_sub_field("heading"); ?></span></h2>
                        </div>
                        <div class="col-md-6">
                            <div class="bsky_serving_text">
                               <p class="default_body"><?php echo get_sub_field("text"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="serving_img">
                            <?php echo get_sub_field("map"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif ; ?>    