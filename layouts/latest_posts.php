<?php 
  
  if (get_row_layout() == 'latest_posts') : 

    $heading = get_sub_field('heading'); // Banner heading
    $button_text = get_sub_field('button_text'); 
    $button_link = get_sub_field('button_link');    
	
?>  
	
<section class="bsky_blog <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_blog_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_blog_inner">
          <div class="common_title">
            <div class="row align-items-center">
              <div class="col-auto latest_heading_blue">
                <h4 class="heading_4"><?php echo $heading; ?></h4>
              </div>
              <div class="col-md mobile_hide_see">
                <a href="<?php echo $button_link; ?>" class="common_title_btn"> <?php echo $button_text; ?> </a> 
              </div>
            </div>
          </div>
  
          <div class="row blog_cards">		 
			<?php
			$category_name = 'latest-posts'; // Replace with your category slug
			$args = array(
				'post_type'      => 'post', // Change this for custom post types
				'posts_per_page' => -1, // Retrieve all posts
				'category_name'  => $category_name, // Filter by category name (slug)
				'post_status'    => 'publish', // Only published posts
			);

			$posts = get_posts($args);

			if (!empty($posts)) {
				foreach ($posts as $post) {
					setup_postdata($post); ?>
					<div class="col-md-4">
						<div class="bsky_blog_card">
							<div class="bsky_blog_card_item">
								<!-- Dynamic Featured Image -->
								<?php if (has_post_thumbnail($post->ID)): ?>
									<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'medium'); ?>" alt="<?php the_title_attribute(); ?>" />
								<?php else: ?>
									<img src="assets/images/default_blog_img.png" alt="Default Image" /> <!-- Fallback image -->
								<?php endif; ?>
								
								<div class="blog_card_text">
									<!-- Dynamic Title -->
									<p class="default_body_large">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</p>
									
									<!-- Dynamic Excerpt -->
									<div class="default_body_small color_dark_blue">
										<?php the_content(); ?> 
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }
				wp_reset_postdata(); // Reset after loop
			} else { ?>
				<p>No posts found in this category.</p>
			<?php }
			?>

          </div>

        </div>
		<div class="col-md mobile_show_see">
                <a href="<?php echo $button_link; ?>" class="common_title_btn"> <?php echo $button_text; ?> </a> 
              </div>
      </div>
    </div>
</section>	
	

<?php endif; ?>			   
	