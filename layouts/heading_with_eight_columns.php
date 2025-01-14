<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_eight_columns') : 
 
	?>   
<section class="bsky_huge_text default_pb">
    <div class="bsky_huge_text_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_huge_text_inner text-center">
                <h2 class="huge_text"><?php echo get_sub_field('heading'); ?></h2>
            </div>

            <div class="common_cards default_pt">
                <div class="common_card_inner eight_card">
                    <div class="row">
                        <?php 
                        $columns = get_sub_field('columns');
                        foreach ($columns as $value) {
                        ?>
                        <div class="col-md-4 col-lg-3">
                            <div class="common_card">
                                <img src="<?php echo $value['icon']; ?>" alt="" srcset="">
                                <h5 class="heading_5"><?php echo $value['column_heading']; ?></h5>
                                <p class="default_body_small"><?php echo $value['column_content']; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>