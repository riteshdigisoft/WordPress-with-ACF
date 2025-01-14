<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'two_columns_with_left_image_and_right_content__with_list') : 

    // Get the subfields 
    $left_image = get_sub_field('left_image'); // Banner heading
	$right_heading = get_sub_field('right_heading'); // Banner heading
	$right_sub_heading = get_sub_field('right_sub_heading'); // Banner heading
	$right_content = get_sub_field('right_content');
	$call_button_text = get_sub_field('call_button_text');
	$learn_more_link = get_sub_field('learn_more_link');
	?>   
	
    <section class="bsky_zig_zag <?php echo get_sub_field('select_class'); ?> <?php echo get_sub_field('another_class'); ?>">
        <div class="bsky_zig_zag_outter">
            <div class="bsky_overall_wrapper">
                <div class="bsky_zig_zag_inner">
                    <?php
                    if(get_sub_field('top_heading')){
                     ?>
                     <h2 class="heading_2"><?php echo get_sub_field('top_heading'); ?></h2>
                    <?php } ?>
                   <div class="row g-0 ">
                    <?php if($left_image){ ?>
                        <div class="col-md-6">
                            <div class="img_side">
                                <img src="<?php echo $left_image; ?>" alt="" class="img_side_img">
                            </div>
                        </div>
                    <?php } ?>
                    <?php if(get_sub_field('video_thumbnail')){ ?>
                        <div class="col-md-6">
                            <div class="img_side">
							
						<video 
								id="videoPlayer"
								class="img_side_img"
								src="" 
								poster="<?php echo get_sub_field('video_thumbnail'); ?>" 
								onclick="playVideo()"
							></video>

							<span  
								class="youtube-links" 
								youtubeids="<?php echo get_sub_field('video_id'); ?>" 
							></span>

							<a href="javascript:void(0);" class="play_btn" onclick="playVideo()">
								<img 
									src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.svg" 
									alt="Play Video" 
								/>
							</a>
								
                            </div>
                        </div>
                    <?php } ?>
                        <div class="col-md-6">
                            <div class="img_side_text approch_text faq_text">
                                <h5 class="heading_5"><?php echo $right_sub_heading; ?> </h5>
                                <h2 class="heading_2"><?php echo $right_heading; ?> </h2>
                                <p class="default_body_large color_dark_blue"><?php echo $right_content; ?></p>
                                <?php 
                                $solutions = get_sub_field('solutions');
                                if($solutions){
                                ?>
                                <ul class="list_style ">
                                    <?php
                                    foreach ($solutions as $value) {
                                       ?>
                                        <li class="default_body">
                                            <span><img src="/wp-content/uploads/2024/12/tick.svg" alt="" srcset=""></span><?php echo $value['text']; ?>
                                        </li>
                                       <?php 
                                    }
                                    ?>
                                </ul>
                                <?php 
                                    }
                                ?>
                                <?php if($call_button_text){ ?>
                                <div class="orange_btn">
                                    <a href="<?php echo $learn_more_link; ?>" class="get_btn"><?php echo $call_button_text; ?></a>
                                </div>
                                <?php 
                                }
                                $faq = get_sub_field('faq');
                                if($faq){
                                $id = str_replace(' ', '-', strtolower($right_heading));
                                ?>
                                <div class="faqs_accordion_side ">
                                <div class="accordion" id="<?php echo $id; ?>">
                                    <?php
                                    foreach ($faq as $key => $value) {
                                    ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?php echo $key."_".$id; ?>">
                                                <button
                                                    class="accordion-button <?php echo ($key === 0) ? '' : 'collapsed'; ?>" 
                                                    type="button" 
                                                    data-bs-toggle="collapse" 
                                                    data-bs-target="#collapse<?php echo $key."_".$id ?>" 
                                                    aria-expanded="<?php echo ($key === 0) ? 'true' : 'false'; ?>" 
                                                    aria-controls="collapse<?php echo $key."_".$id ?>">
                                                    <?php echo $value['text']; ?>
                                                </button>
                                            </h2>
                                            <div 
                                                id="collapse<?php echo $key."_".$id ?>" 
                                                class="accordion-collapse collapse <?php echo ($key === 0) ? 'show' : ''; ?>" 
                                                aria-labelledby="heading<?php echo $key."_".$id ?>" 
                                                data-bs-parent="#<?php echo $id; ?>">
                                                <div class="accordion-body default_caption_title">
                                                    <?php echo $value['content']; ?> 
                                                </div>           
                                            </div>
                                        </div>
                                        <?php }?>
                            </div>
                        <?php }?>
                            </div>
                             </div>
                        </div>
                   </div>

                </div>
            </div>
        </div>
    </section>	

<?php 
$column = get_sub_field("testimonials");
if($column){
?>
<section class="bsky_testimonial default_pb">
    <div class="bsky_testimonial_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_testimonial_inner">
                <div class="testimonial_slider without_avtar">
                    <?php 
                    foreach($column as $value){
                    ?>
                    <div class="testimonial_card">
                        <div class="testimonial_card_inner">
                            <div class="customer_name">
                                <h5 class="heading_5"><?php echo $value['text']; ?></h5>
                            </div>
                            <p class="custoner_review default_body_small color_dark_blue">
                                <?php echo $value['content']; ?>
                            </p>
                        </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<script>  
function playVideo() {
    // Get the YouTube video ID
    var youtubeID = document.querySelector('.youtube-links').getAttribute('youtubeids');

    if (!youtubeID) {
        console.error('YouTube ID not found!');
        return;
    }

    // Get the video container and the play button
    var videoPlayer = document.getElementById('videoPlayer');
    var playButton = document.querySelector('.play_btn');

    // Hide the play button
    if (playButton) {
        playButton.style.display = 'none';
    }

    // Replace the video with an iframe
    var iframe = document.createElement('iframe');
    iframe.setAttribute('src', `https://www.youtube.com/embed/${youtubeID}?autoplay=1&controls=0`);
    iframe.setAttribute('width', videoPlayer.offsetWidth);
    iframe.setAttribute('height', videoPlayer.offsetHeight);
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
    iframe.setAttribute('allowfullscreen', true);

    // Replace the video element with the iframe
    videoPlayer.parentNode.replaceChild(iframe, videoPlayer);
}  
</script> 
<?php endif; ?>	
	