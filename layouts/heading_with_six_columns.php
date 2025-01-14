<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_six_columns') : 
	?> 
	
	  
<section class="bsky_huge_text default_pt">
    <div class="bsky_huge_text_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_huge_text_inner text-center">
                <h2 class="huge_text"><?php echo get_sub_field('heading'); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="bsky_history default_pt">
    <div class="bsky_history_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_history_inner">
                <div class="bsky_history_items">
                    <div class="row">
                        <?php 
                        $columns = get_sub_field('columns');
                        foreach ($columns as $value) {
                        ?>
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="bsky_history_item">
                                <div class="bsky_history_item_inner">
                                    <h3 class="heading_3">
                                        <?php echo $value['column_heading']; ?>
                                    </h3>
                                    <p class="default_body_large">
                                       <?php echo $value['column_content']; ?>
                                    </p>
                                </div>
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
	   