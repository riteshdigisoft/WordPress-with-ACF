<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'heading_logo_with_refer_form') : 

    // Get the subfields 
	$logo = get_sub_field('logo'); 
    $heading = get_sub_field('heading'); 	
	$refer_form = get_sub_field('refer_form'); 
	$page_heading = get_sub_field('page_heading'); 
	$page_sub_heading = get_sub_field('page_sub_heading'); 
	$page_main_content = get_sub_field('page_main_content'); 
	$page_sub_content = get_sub_field('page_sub_content'); 
	
?>  

<section class="bsky_resources default_pt">
    <div class="bsky_resources_outter">
      <div class="bsky_overall_wrapper">
        <div class="bsky_resources_inner">  

            <div class="common_title text-center ">
                <p class="default_caption_caps"><?php echo $page_heading;?></p>
                <h1 class="heading_1"><?php echo $page_sub_heading;?></h1>
                <p class="default_body_large">
                   <?php echo $page_main_content;?>
                </p>
                <p class="default_body_small">
                    <?php echo $page_sub_content;?> 
                </p>
            </div>
        </div>
      </div>
    </div>
</section>

<section class="bsky_profesn default_pb say_hi">
    <div class="bsky_profesn_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_profesn_inner bg_section">
                <div class="row">
                    <div class="col-auto">
                        <div class="table_side">
                            <div class="bookform">
                                <h4 class="contact_form_title">
                                    <img src="<?php echo $logo;?>" alt="" class="">
                                    <a href="#" class="default_body_large"><?php echo $heading;?></a>
                                </h4>
                               <?php echo $refer_form; ?>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>