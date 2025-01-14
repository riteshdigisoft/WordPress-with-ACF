<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_with_four_columns_inner') :  
 
    // Get the subfields
    $heading = get_sub_field('heading');
    $sub_heading = get_sub_field('sub_heading'); 
	?> 
<section class="bsky_bluebg_cards default_pt">
    <div class="bsky_bluebg_cards_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_bluebg_cards_inner bg_section">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="heading_3"><?php echo $heading; ?></h3>
                    </div>
                    <div class="col-md-6">
                        <p class="default_body"><?php echo $sub_heading; ?></p>
                    </div>
                </div>  
<div class="row blue_card_gap count_card four_col_block_slider">
    <?php if (have_rows('columns')): ?>
        <?php 
        $count = 1; // Initialize counter
        $colors = ['color_orange', 'color_pink', 'color_lavender', 'color_green']; // Define color classes
        ?>
        <?php while (have_rows('columns')): the_row(); ?>
            <?php 
            $heading = get_sub_field('column_heading'); 
            $content = get_sub_field('column_content'); 
            $color_class = $colors[($count - 1) % count($colors)]; // Calculate color class dynamically
            ?>
            <div class="col-md-3 col-sm-6 col-12"> <!-- Adjust for responsiveness -->
                <div class="bluebg_card">
                    <div class="bluebg_card_inner">
                        <!-- Dynamic Count -->
                        <span class="<?php echo $color_class; ?> bluebg_count"><?php echo $count; ?></span>
                        
                        <!-- Column Heading -->
                        <?php if (!empty($heading)): ?>
                            <h5 class="bluebg_card_title heading_5"><?php echo esc_html($heading); ?></h5>
                        <?php endif; ?>

                        <!-- Column Content -->
                        <?php if (!empty($content)): ?>
                            <p class="default_body"><?php echo esc_html($content); ?></p>
                        <?php endif; ?>
                    </div> 
                </div>
            </div>
            <?php $count++; // Increment counter ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
 
            </div>
        </div>
    </div>
</section>

<?php endif; ?>