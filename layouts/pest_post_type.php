<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'pest_post_type') :

    // Get the subfields
    $heading = get_sub_field('heading'); // Banner heading
    $see_all_link = get_sub_field('see_all_link'); // Banner subheading
    $posts = get_sub_field('posts'); // Button text     
	?>   
   <section class="bsky_common_pets <?php echo get_sub_field('custom_class'); ?>">
        <div class="bsky_common_pets_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_common_pets_inner">
				
				
			<?php if (!empty($heading)) { ?>
				<div class="common_title">
					<div class="row align-items-center">
						<div class="col-md-auto">
							<h4 class="heading_4"><span class="blue_line"><?php echo $heading; ?></span></h4>
						</div>
						<?php if (!empty($see_all_link)) { ?>
							<div class="col-md d-none d-md-block">
								<a href="<?php echo esc_url($see_all_link); ?>" class="common_title_btn">
									See All
								</a>
							</div>
						<?php } ?>
					</div>
				</div>
			<?php } ?>


                    <div class="bsky_pets_categ">
                        
						<?php
						  // Assuming you're inside a loop (like for a flexible field)
						  $posts = get_sub_field('posts'); // Get the posts from the repeater field
						  
						  if ($posts) : ?>
						   <ul class="bsky_pets_categ_ul bsky_pest_slider">
						
							  <?php foreach ($posts as $post) : 
								setup_postdata($post); // Setup post data for each post
							  ?>
								<li>
								  <a href="<?php the_permalink(); ?>" class="bsky_pets_categ_a">
									<div class="bsky_pets_categ_in">
									  <?php 
										// Display post featured image
										if (has_post_thumbnail()) :
										  the_post_thumbnail('thumbnail'); // Adjust size as needed
										endif;
									  ?>
									  <p class="default_caption_title"><?php the_title(); ?></p>
									</div>
								  </a>
								</li>
							  <?php endforeach; ?>
							</ul>
						  <?php 
							wp_reset_postdata(); // Reset the global $post object
						  endif;
						?>
						<div class="col-md d-block d-md-none">
                        <a href="#" class="common_title_btn mobile_common_title_btn">
                            See All
                        </a>
                    </div>
                    </div>  

                </div>
            </div>
        </div>
    </section>
	
	<?php endif; // End check for 'banner_with_heading_and_video' layout ?>