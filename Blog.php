<?php
/**
 * Template Name: Blog Template 
 */
get_header(); 
?>


<section class="bsky_blog default_pt blog_page">
    <div class="bsky_blog_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_blog_inner">
          <div class="common_title">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="heading_2">Latest at Blue Sky</h2>
              </div>
              <div class="col-md">
                <div class="tabs_list">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link default_caption_title active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pest Control</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link default_caption_title" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Bites & Stings</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link default_caption_title" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Pest Guides</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link default_caption_title" id="pills-diy-tab" data-bs-toggle="pill" data-bs-target="#pills-diy" type="button" role="tab" aria-controls="pills-diy" aria-selected="false">DIY</button>
                          </li>
                      </ul>
                </div>
              </div>
            </div>
          </div>
  
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
				     
	 				 
				<?php
				$args = array(
					'post_type'      => 'post',   // Default WordPress Posts
					'posts_per_page' => -1,       // Get all posts
					'orderby'        => 'date',   // Order by date
					'order'          => 'DESC',   // Descending order
					'posts_per_page' => 6, 
					 'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // Get current page number
				);

				$query = new WP_Query($args);

				if ($query->have_posts()): ?>

						<?php 
						$count = 0; // Initialize counter
						$form_inserted = false; // Flag to check if the form has been added
						while ($query->have_posts()): $query->the_post(); 
						$count++; // Increment counter
						?>
							<div class="col-lg-4 col-md-6">
								<div class="bsky_blog_card">
									<div class="bsky_blog_card_item">
										<!-- Featured Image -->
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_img.png" alt="Default Image" class="img-fluid" />
										<?php endif; ?>

										<div class="blog_card_text">
											<!-- Post Title -->
											<h5 class="heading_5">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
											
											<!-- Date and Author -->
											<p class="small_gray default_caption_super_small">
												<?php echo get_the_date(); ?> - By: 
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
													<?php the_author(); ?>
												</a>
											</p>
											
											<!-- Excerpt -->
											<p class="default_body_small color_dark_blue">
												<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
											</p>
											
											<!-- Read More Link -->
											<a href="<?php the_permalink(); ?>" class="read_link">Read full post</a>
										</div>
									</div>
								</div>
							</div>
							
							<?php 
							// Insert the form only after the 5th post
							if ($count === 5 && !$form_inserted): ?>
								<div class="col-lg-4 col-md-6">
									<div class="blog_form">
										<div class="blog_form_inner">
											<div class="bookform">
												<h4 class="ft-36">Get your free pest control estimate:</h4>
												<?php echo do_shortcode('[wpforms id="1033"]'); ?>
											</div>
										</div>
									</div>
								</div>
								<?php $form_inserted = true; // Set the flag to true ?>
							<?php endif; ?>
						<?php endwhile; ?>

					<!-- Pagination -->
    <div class="pagination_outter">
        <nav aria-label="Page navigation example">
            <?php 
            $big = 999999999; // an unlikely integer
            $pagination = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $query->max_num_pages,
                'type'      => 'array', // Returns an array of links
                'prev_text' => '<<',
                'next_text' => '>>',
            ));

            if (!empty($pagination)): ?>
                <ul class="pagination">
                    <?php foreach ($pagination as $page): ?>
                        <li class="page-item<?php echo strpos($page, 'current') !== false ? ' active' : ''; ?>">
                            <?php echo str_replace('page-numbers', 'page-link', $page); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>
    </div>

    <?php wp_reset_postdata(); // Reset query ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>



                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
			
			                   <div class="row">
				     
	 				 
				<?php
				$args = array(
					'post_type'      => 'post',   // Default WordPress Posts
					'posts_per_page' => -1,       // Get all posts
					'orderby'        => 'date',   // Order by date
					'order'          => 'DESC',   // Descending order
					'posts_per_page' => 6, 
					'category_name'  => 'bites_stings', 
					 'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // Get current page number
				);

				$query = new WP_Query($args);

				if ($query->have_posts()): ?>

						<?php 
						$count = 0; // Initialize counter
						$form_inserted = false; // Flag to check if the form has been added
						while ($query->have_posts()): $query->the_post(); 
						$count++; // Increment counter
						?>
							<div class="col-lg-4 col-md-6">
								<div class="bsky_blog_card">
									<div class="bsky_blog_card_item">
										<!-- Featured Image -->
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_img.png" alt="Default Image" class="img-fluid" />
										<?php endif; ?>

										<div class="blog_card_text">
											<!-- Post Title -->
											<h5 class="heading_5">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
											
											<!-- Date and Author -->
											<p class="small_gray default_caption_super_small">
												<?php echo get_the_date(); ?> - By: 
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
													<?php the_author(); ?>
												</a>
											</p>
											
											<!-- Excerpt -->
											<p class="default_body_small color_dark_blue">
												<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
											</p>
											
											<!-- Read More Link -->
											<a href="<?php the_permalink(); ?>" class="read_link">Read full post</a>
										</div>
									</div>
								</div>
							</div>
							
							<?php 
							// Insert the form only after the 5th post
							if ($count === 5 && !$form_inserted): ?>
								<div class="col-lg-4 col-md-6">
									<div class="blog_form">
										<div class="blog_form_inner">
											<div class="bookform">
												<h4 class="ft-36">Get your free pest control estimate:</h4>
												<?php echo do_shortcode('[wpforms id="1033"]'); ?>
											</div>
										</div>
									</div>
								</div>
								<?php $form_inserted = true; // Set the flag to true ?>
							<?php endif; ?>
						<?php endwhile; ?>

					<!-- Pagination -->
    <div class="pagination_outter">
        <nav aria-label="Page navigation example">
            <?php 
            $big = 999999999; // an unlikely integer
            $pagination = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $query->max_num_pages, 
                'type'      => 'array', // Returns an array of links
                'prev_text' => '<<',
                'next_text' => '>>',
            ));

            if (!empty($pagination)): ?>
                <ul class="pagination">
                    <?php foreach ($pagination as $page): ?>
                        <li class="page-item<?php echo strpos($page, 'current') !== false ? ' active' : ''; ?>">
                            <?php echo str_replace('page-numbers', 'page-link', $page); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>
    </div>

    <?php wp_reset_postdata(); // Reset query ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>



                </div>
			
			</div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
			  
			                  <div class="row">
				     
	 				 
				<?php
				$args = array(
					'post_type'      => 'post',   // Default WordPress Posts
					'posts_per_page' => -1,       // Get all posts
					'orderby'        => 'date',   // Order by date
					'order'          => 'DESC',   // Descending order
					'posts_per_page' => 6, 
					'category_name'  => 'pest_guides', 
					 'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // Get current page number
				);

				$query = new WP_Query($args);

				if ($query->have_posts()): ?>

						<?php 
						$count = 0; // Initialize counter
						$form_inserted = false; // Flag to check if the form has been added
						while ($query->have_posts()): $query->the_post(); 
						$count++; // Increment counter
						?>
							<div class="col-lg-4 col-md-6">
								<div class="bsky_blog_card">
									<div class="bsky_blog_card_item">
										<!-- Featured Image -->
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_img.png" alt="Default Image" class="img-fluid" />
										<?php endif; ?>

										<div class="blog_card_text">
											<!-- Post Title -->
											<h5 class="heading_5">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
											
											<!-- Date and Author -->
											<p class="small_gray default_caption_super_small">
												<?php echo get_the_date(); ?> - By: 
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
													<?php the_author(); ?>
												</a>
											</p>
											
											<!-- Excerpt -->
											<p class="default_body_small color_dark_blue">
												<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
											</p>
											
											<!-- Read More Link -->
											<a href="<?php the_permalink(); ?>" class="read_link">Read full post</a>
										</div>
									</div>
								</div>
							</div>
							
							<?php 
							// Insert the form only after the 5th post
							if ($count === 5 && !$form_inserted): ?>
								<div class="col-lg-4 col-md-6">
									<div class="blog_form">
										<div class="blog_form_inner">
											<div class="bookform">
												<h4 class="ft-36">Get your free pest control estimate:</h4>
												<?php echo do_shortcode('[wpforms id="1033"]'); ?>
											</div>
										</div>
									</div>
								</div>
								<?php $form_inserted = true; // Set the flag to true ?>
							<?php endif; ?>
						<?php endwhile; ?>

					<!-- Pagination -->
    <div class="pagination_outter">
        <nav aria-label="Page navigation example">
            <?php 
            $big = 999999999; // an unlikely integer
            $pagination = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $query->max_num_pages,
                'type'      => 'array', // Returns an array of links
                'prev_text' => '<<',
                'next_text' => '>>',
            ));

            if (!empty($pagination)): ?>
                <ul class="pagination">
                    <?php foreach ($pagination as $page): ?>
                        <li class="page-item<?php echo strpos($page, 'current') !== false ? ' active' : ''; ?>">
                            <?php echo str_replace('page-numbers', 'page-link', $page); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>
    </div>

    <?php wp_reset_postdata(); // Reset query ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>



                </div>
			
			
			</div>

            <div class="tab-pane fade" id="pills-diy" role="tabpanel" aria-labelledby="pills-diy-tab">
			
			
			                 <div class="row">
				     
	 				 
				<?php
				$args = array(
					'post_type'      => 'post',   // Default WordPress Posts
					'posts_per_page' => -1,       // Get all posts
					'orderby'        => 'date',   // Order by date
					'order'          => 'DESC',   // Descending order
					'posts_per_page' => 6, 
					'category_name'  => 'diy', 
					 'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // Get current page number
				);

				$query = new WP_Query($args);

				if ($query->have_posts()): ?>

						<?php 
						$count = 0; // Initialize counter
						$form_inserted = false; // Flag to check if the form has been added
						while ($query->have_posts()): $query->the_post(); 
						$count++; // Increment counter
						?>
							<div class="col-lg-4 col-md-6">
								<div class="bsky_blog_card">
									<div class="bsky_blog_card_item">
										<!-- Featured Image -->
										<?php if (has_post_thumbnail()): ?>
											<img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
										<?php else: ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_img.png" alt="Default Image" class="img-fluid" />
										<?php endif; ?>

										<div class="blog_card_text">
											<!-- Post Title -->
											<h5 class="heading_5">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
											
											<!-- Date and Author -->
											<p class="small_gray default_caption_super_small">
												<?php echo get_the_date(); ?> - By: 
												<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
													<?php the_author(); ?>
												</a>
											</p>
											
											<!-- Excerpt -->
											<p class="default_body_small color_dark_blue">
												<?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
											</p>
											
											<!-- Read More Link -->
											<a href="<?php the_permalink(); ?>" class="read_link">Read full post</a>
										</div>
									</div>
								</div>
							</div>
							
							<?php 
							// Insert the form only after the 5th post
							if ($count === 5 && !$form_inserted): ?>
								<div class="col-lg-4 col-md-6">
									<div class="blog_form">
										<div class="blog_form_inner">
											<div class="bookform">
												<h4 class="ft-36">Get your free pest control estimate:</h4>
												<?php echo do_shortcode('[wpforms id="1033"]'); ?>
											</div>
										</div>
									</div>
								</div>
								<?php $form_inserted = true; // Set the flag to true ?>
							<?php endif; ?>
						<?php endwhile; ?>

					<!-- Pagination -->
    <div class="pagination_outter">
        <nav aria-label="Page navigation example">
            <?php 
            $big = 999999999; // an unlikely integer
            $pagination = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, get_query_var('paged')),
                'total'     => $query->max_num_pages,
                'type'      => 'array', // Returns an array of links
                'prev_text' => '<<',
                'next_text' => '>>',
            ));

            if (!empty($pagination)): ?>
                <ul class="pagination">
                    <?php foreach ($pagination as $page): ?>
                        <li class="page-item<?php echo strpos($page, 'current') !== false ? ' active' : ''; ?>">
                            <?php echo str_replace('page-numbers', 'page-link', $page); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </nav>
    </div>

    <?php wp_reset_postdata(); // Reset query ?>
<?php else: ?>
    <p>No posts found.</p>
<?php endif; ?>



                </div>
			
			
			</div>
          </div>
         

        </div>
      </div>
    </div>   
</section>

<?php  

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();
        if ( have_rows('flexible_layouts') ) {
            while ( have_rows('flexible_layouts') ) {
                the_row();

                $layout = get_row_layout(); 
                $layout_file = get_template_directory() . '/layouts/' . $layout . '.php';
                if ( file_exists($layout_file) ) {
                    include( $layout_file );
                } else {
                    echo '<p>Layout file for "' . esc_html($layout) . '" not found.</p>';
                }
            }

        } else {
            echo '<p>No flexible content found.</p>';
        }
    }

} else {
    echo '<p>No posts found.</p>';
}
 ?>      

<?php get_footer(); ?>