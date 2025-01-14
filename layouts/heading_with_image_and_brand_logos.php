<?php

  if (get_row_layout() == 'heading_with_image_and_brand_logos') : 
  
	
	$heading = get_sub_field('heading');
    $class = get_sub_field('class');
?> 


<section class="bsky_huge_text <?php echo $class; ?>">
    <div class="bsky_huge_text_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_huge_text_inner text-center">
                <h2 class="huge_text"><?php echo $heading; ?></h2>
            </div>

            <ul class="brand_slider default_pt">
			
			
			            <?php if (have_rows('column')): ?>
							<?php while (have_rows('column')): the_row(); 
								$content = get_sub_field('image_brand'); 
							?>
								<li>
								 <img src="<?php echo $content; ?>" alt="" srcset="">
								</li>
							<?php endwhile; ?>

					<?php else: ?>
						<p>No icons found.</p>
					<?php endif; ?>
            </ul>
        </div>
    </div>
</section>
















<?php endif; ?>