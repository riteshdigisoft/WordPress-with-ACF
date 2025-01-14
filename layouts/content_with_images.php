<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'content_with_images') : 

    // Get the subfields
    $content_and_images = get_sub_field('content_and_images'); // Banner heading
 
	?>   
  <section class="bsky_huge_text <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_huge_text_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_huge_text_inner text-center">
                    <h2 class="huge_text"><?php echo $content_and_images; ?></h2>
                </div>
            </div>
        </div>
    </section>
	
<?php endif ; ?>	