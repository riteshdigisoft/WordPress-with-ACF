<?php get_header(); ?>
 
<section class="bsky_blog-details default_py">
    <div class="bsky_blog-details_outter"> 
      <div class="bsky_overall_wrapper">
        <div class="bsky_blog-details_inner">
          
            <div class="row align-items-start">
			
                <div class="col-lg-8 col-md-7">
    <!-- Breadcrumb Section -->
    <ul class="custom_breadcrumb">
        <ol class="breadcrumb">
            <li class="default_caption_caps">
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="color_blue">Blue Sky Blog</a>
            </li>
            <li class="breadcrumb-item">
                &nbsp; &nbsp; By: 
		<?php
		// Assuming you have the post ID (e.g., from a custom query or variable)
		$post_id = get_the_ID(); // Or use a specific post ID if you have one

		// Get the post object
		$post = get_post($post_id);

		// Set up post data
		setup_postdata($post);

		// Get the author name
		$author_name = get_the_author();

		// Reset the global post data
		wp_reset_postdata();
		?>

		<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
			<?php echo esc_html($author_name); ?>
		</a>

                &nbsp; &nbsp; Date: <?php echo get_the_date(); ?>
            </li>
        </ol>
    </ul>

    <!-- Blog Content Section -->
    <div class="blog_outer">
        <!-- Post Title -->
        <h2 class="heading_2"><?php the_title(); ?></h2>   

        <!-- Featured Image -->
        <?php if (has_post_thumbnail()): ?>
            <div class="blog_featured_image">
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid" />
            </div>
        <?php endif; ?>

        <!-- Post Content -->
        <div class="blog_content">
            <?php the_content(); ?>
        </div>
    </div>
</div> 


                <div class="col-lg-4 col-md-5">
                    <div class="blog_form blog-details">
                        <div class="blog_form_inner">
                            <div class="bookform">
                                <h4 class="heading_4">
                                    $50 Off Your Initial Pest Control Service
                                    <div class="orange_btn">
                                        <a href="tel:+(480) 605-1522" class="get_btn">Call (480) 605-1522</a>
                                    </div>
                                </h4>
                                <hr>
	                        <?php echo do_shortcode('[wpforms id="261"]'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="blog_categories">
                        <h5 class="heading_5">Categories</h5>
                        <div class="blog_categories_inner">
                            <ul>
    <?php
    // Get all categories
    $categories = get_categories();
    
    // Loop through categories and display each one
    foreach($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '" class="default_caption_title">' . $category->name . '</a></li>';
    }
    ?>
                            </ul>
                           
                        </div>
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

        }
    }

}
 ?>


<section class="bsky_blog default_py">
    <div class="bsky_blog_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_blog_inner">
          <div class="common_title">
            <div class="row align-items-center">
              <div class="col-auto">
                <h4 class="heading_4">Related Posts</h4>
              </div>
              <div class="col-md mobile_hide_see">
                <a href="/blog" class="common_title_btn"> See All </a>
              </div>
            </div>
          </div>
  

		  
<div class="row blog_cards">
    <?php
    // Query for the latest 3 posts
    $args = array(
        'posts_per_page' => 3, // Number of posts to show
        'post_type' => 'post',  // Only fetch posts
        'orderby' => 'date',    // Order by date
        'order' => 'DESC'       // Descending order (latest first)
    );
    
    $latest_posts = new WP_Query($args);

    // Check if there are posts
    if($latest_posts->have_posts()) :
        // Loop through each post
        while($latest_posts->have_posts()) : $latest_posts->the_post();
    ?>
        <div class="col-md-4">
            <div class="bsky_blog_card">
                <div class="bsky_blog_card_item">
                    <!-- Make the image clickable -->
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        // Display post thumbnail if available
                        if(has_post_thumbnail()) :
                            the_post_thumbnail('medium'); // You can change the size
                        else :
                        ?>
                            <img src="assets/images/blog_img.png" alt="" />
                        <?php endif; ?>
                    </a>
                    
                    <div class="blog_card_text">
                        <!-- Make the title clickable -->
                        <a href="<?php the_permalink(); ?>">
                            <p class="default_body_large"><?php the_title(); ?></p>
                        </a>
                        <p class="default_body_small color_dark_blue">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?> <!-- Limit the text to 20 words -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php
        endwhile;
    endif;

    // Reset post data after the custom query
    wp_reset_postdata();
    ?>
</div>

        </div>
        <div class="col-md mobile_show_see">
      <a href="/blog" class="common_title_btn"> See All </a>
    </div>

      </div>
    </div>
</section>

<?php get_footer(); ?>  