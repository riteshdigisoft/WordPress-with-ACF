 <?php 
  if (get_row_layout() == 'multicolumn') : 
 ?>  
 <section class="bsky_zig_zag <?php echo get_sub_field("custom_class"); ?>">
    <div class="bsky_zig_zag_outter"> 
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row g-0 custom_gap">
                <?php 
                $three_column = get_sub_field("three_column");
                foreach ($three_column as $value) {
                ?>
                <div class="col-md-4">
                    <div class="blue_card">
                        <div class="blue_card_inner">
                            <div class="blue_card_title">
                                <h5 class="heading_5"><?php echo $value['heading'] ?></h5>
                            </div>
                            <p class="default_body_small color_dark_blue">
                                <?php echo $value['content'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
               </div>
               <div class="row g-0 custom_gap">
                <?php 
                $two_column = get_sub_field("two_column");
                foreach ($two_column as $value) {
                ?>
                <div class="col-md-6">
                    <div class="blue_card">
                        <div class="blue_card_inner">
                            <div class="blue_card_title">
                                <h5 class="heading_5"><?php echo $value['heading'] ?></h5>
                            </div>
                            <p class="default_body_small color_dark_blue">
                                <?php echo $value['content'] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
               </div>
            </div>
        </div>
    </div>
</section>

<?php endif ; ?>