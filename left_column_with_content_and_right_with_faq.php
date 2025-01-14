<?php

  if (get_row_layout() == 'left_column_with_content_and_right_with_faq') : 
  
	$left_heading = get_sub_field('left_heading');
	$left_content = get_sub_field('left_content');
	$button_text = get_sub_field('button_text');
    $button_link = get_sub_field('button_link');
	$right_heading = get_sub_field('right_heading');
    
?> 


<section class="bsky_faqs without_bg_faq">
    <div class="bsky_faqs_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_faqs_inner">
            <div class="row">  
                <div class="col-md-6">
                    <div class="faqs_text_side">
                        <div class="img_side_text approch_text">
                            <h2 class="heading_2"><?php echo $left_heading; ?></h2>
                            <p class="default_body"><?php echo $left_content; ?></p>
                            <?php if($button_text && $button_link){ ?>
                            <div class="orange_btn">
                                <a href="<?php echo $button_link; ?>" class="get_btn"><?php echo $button_text; ?></a>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faqs_accordion_side">
                        <div class="img_side_text approch_text">
                            <h5 class="heading_5"><?php echo $right_heading; ?></h5>
                            
                        <div class="accordion" id="accordionExamplefaq">
                            <?php if (have_rows('faq')): ?>
                                <?php $counter = 1; ?>
                                <?php while (have_rows('faq')): the_row(); ?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                            <button 
                                                class="accordion-button <?php echo ($counter === 1) ? '' : 'collapsed'; ?>" 
                                                type="button" 
                                                data-bs-toggle="collapse" 
                                                data-bs-target="#collapse<?php echo $counter; ?>" 
                                                aria-expanded="<?php echo ($counter === 1) ? 'true' : 'false'; ?>" 
                                                aria-controls="collapse<?php echo $counter; ?>">
                                                <span><?php echo $counter; ?></span> <?php echo get_sub_field('question'); ?>
                                            </button>
                                        </h2>
                                        <div 
                                            id="collapse<?php echo $counter; ?>" 
                                            class="accordion-collapse collapse <?php echo ($counter === 1) ? 'show' : ''; ?>" 
                                            aria-labelledby="heading<?php echo $counter; ?>" 
                                            data-bs-parent="#accordionExamplefaq">
                                            <div class="accordion-body default_caption_title">
                                                <?php echo get_sub_field('answer'); ?> 
                                            </div>           
                                        </div>
                                    </div>
                                    <?php $counter++; ?>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p>No accordion items found.</p>
                            <?php endif; ?>
                        </div>


							  
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>




















<?php endif; ?>