<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'pest_post_type_with_heading_and_subheading') : 

    $heading = get_sub_field('heading'); 
    $sub_heading = get_sub_field('sub_heading');
?>

<section class="bsky_common_pets <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_common_pets_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_common_pets_inner">
                <div class="common_title">
                    <div class="row align-items-center">
                        <div class="<?php if($sub_heading){ ?>col-md-6<?php } else{ echo 'col-auto'; }?>">
                            <?php 
                            if(get_sub_field('heading_tag') == 'h2'){ echo '<h2 class="heading_2">';}
                            elseif(get_sub_field('heading_tag') == 'h3'){echo '<h3 class="heading_3">';}
                            elseif(get_sub_field('heading_tag') == 'h4'){echo '<h4 class="heading_4">';}
                            else{echo '<h2 class="heading_2">';}
                            ?>
                            <span class="blue_line"><?php echo $heading; ?> 
                            <?php 
                            if(get_sub_field('heading_tag') == 'h2'){ echo '</h2>';}
                            elseif(get_sub_field('heading_tag') == 'h3'){echo '</h3>';}
                            elseif(get_sub_field('heading_tag') == 'h4'){echo '</h4>';}
                            else{echo '</h2>';}
                            ?>
                        </div>
                        <?php if($sub_heading){ ?>
                        <div class="col-md-6">
                            <p class="small_para default_body_small color_dark_blue"><?php echo $sub_heading; ?></p>
                        </div>
                        <?php }?>
                        <?php if(get_sub_field("see_all_link")){ ?>
                        <div class="col-md d-none d-md-block">
                            <a href="<?php echo get_sub_field("see_all_link"); ?>" class="common_title_btn">
                                See All
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>


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
                
                <!-- "See All" Box -->
                <?php 
                if(get_sub_field("see_all_bottom_link")){
                ?>
                   <li>   
                            <a href="<?php echo get_sub_field("see_all_bottom_link"); ?>" class="bsky_pets_categ_a">
                                <div class="bsky_pets_categ_in">
								<?php if (get_sub_field("see_all_image")): ?>
							<img src="<?php echo esc_url(get_sub_field("see_all_image")); ?>" alt="See All Image">
						<?php endif; ?>
							<p class="default_caption_title">See all</p>
                                </div>
                            </a>
                    </li>
                <?php }?>
            </ul>
        <?php 
            wp_reset_postdata(); // Reset the global $post object
        endif;
    ?>
</div>
<div class="col-md d-block d-md-none">
        <a href="<?php echo get_sub_field("see_all_link"); ?>" class="common_title_btn mobile_common_title_btn">
        See All
    </a>
</div>
				
				
            </div>
        </div>
    </div>
</section>  

<?php endif; ?>