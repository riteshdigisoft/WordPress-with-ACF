<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'video_with_two_column') : 

    $left_heading = get_sub_field('left_heading'); 
    $left_content = get_sub_field('left_content');
	$btn_txt = get_sub_field('btn_txt');
    $btn_link = get_sub_field('btn_link');
	$right_heading = get_sub_field('right_heading'); 
	$video_poster = get_sub_field('video_poster'); 
	$video_id = get_sub_field('video_id');
	//$right_content = get_sub_field('right_content');  
	//$btn_lnk = get_sub_field('btn_lnk');
?> 

<?php if($video_poster){ ?>
<section class="bsky_huge_video">
    <div class="bsky_huge_video_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_huge_video_inner">
			
			
                <!-- Show video poster if video is added -->
							<video 
								id="videoPlayers"
								class="img_side_img"
								src="" 
								poster="<?php echo esc_url($video_poster); ?>" 
								onclick="playVideos()"
							></video>

							<span  
								class="youtube-linkss" 
								youtubeids="<?php echo esc_attr($video_id); ?>"
							></span>

							<a href="javascript:void(0);" class="play_btns" onclick="playVideos()">
								<img 
									src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.svg" 
									alt="Play Video" 
								/>
							</a>
				
				
            </div>
        </div>
    </div>
</section>
<?php } ?>
<section class="bsky_faqs <?php echo get_sub_field('custom_class'); ?>">
    <div class="bsky_faqs_outter ">
      <div class="bsky_overall_wrapper">
        <div class="bsky_faqs_inner ">
            <div class="row">
                <div class="col-md-6">
                    <div class="faqs_text_side">
                        <div class="img_side_text approch_text">
                            <?php
                                if (get_sub_field("heading_tag") == 'p') {
                                    echo '<p class="default_body text-white">';
                                } elseif (get_sub_field("heading_tag") == 'h2') {
                                    echo '<h2 class="heading_2 text-white">';
                                } elseif (get_sub_field("heading_tag") == 'h5') {
                                    echo '<h5 class="heading_5 text-white">';
                                } else {
                                    echo '<h2 class="heading_2 text-white">';
                                }
                                ?>
                                <?php echo $left_heading;?>
                                <?php
                                if (get_sub_field("heading_tag") == 'p') { 
                                    echo '</p>';
                                } elseif (get_sub_field("heading_tag") == 'h2') {
                                    echo '</h2>';
                                } elseif (get_sub_field("heading_tag") == 'h5') {
                                    echo '</h5>';
                                } else {
                                    echo '</h2>';
                                }
                                ?>
                                
							<?php
								if (get_sub_field("content_tag") == 'p') {
									echo '<p class="default_body text-white">';
								} elseif (get_sub_field("content_tag") == 'h2') {
									echo '<h2 class="heading_2 text-white">';
								} elseif (get_sub_field("content_tag") == 'h5') {
									echo '<h5 class="heading_5 text-white">';
								} else {
									echo '<p class="default_body text-white">';
								}
								?>
								<?php echo $left_content; ?> 
								<?php
								if (get_sub_field("content_tag") == 'p') {
									echo '</p>';
								} elseif (get_sub_field("content_tag") == 'h2') {
									echo '</h2>';
								} elseif (get_sub_field("content_tag") == 'h5') {
									echo '</h5>';
								} else {
									echo '</p>';
								}
								?>

							<?php if($btn_txt){ ?>
                            <div class="orange_btn">
                                <a href="<?php echo $btn_link; ?>" class="get_btn"><?php echo $btn_txt; ?> </a> 
                            </div>
                        <?php }?>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="faqs_accordion_side">
                        <div class="img_side_text approch_text">
                            <h5 class="heading_5 text-white"><?php echo $right_heading; ?></h5>
                        
							<div class="accordion" id="accordion">
                                <?php if( have_rows('faq_section') ): ?>
                                    <?php $counter = 1; // Start the counter at 1 ?>
                                    <?php while( have_rows('faq_section') ): the_row(); ?>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading<?php echo $counter; ?>">
                                                <button class="accordion-button <?php echo ($counter === 1) ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $counter; ?>" aria-expanded="<?php echo ($counter === 1) ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $counter; ?>">
                                                    <span><?php echo $counter; ?></span> <?php the_sub_field('question'); ?>
                                                </button>
                                            </h2>
                                            <div id="collapse<?php echo $counter; ?>" class="accordion-collapse collapse <?php echo ($counter === 1) ? 'show' : ''; ?>" aria-labelledby="heading<?php echo $counter; ?>" data-bs-parent="#accordion">
                                                <div class="accordion-body default_caption_title">
                                                    <?php the_sub_field('answer'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $counter++; // Increment the counter ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</section>
<script>   
function playVideos() {
    // Get the YouTube video ID from the span element with class '.youtube-linkss'
    var youtubeID = document.querySelector('.youtube-linkss').getAttribute('youtubeids');

    if (!youtubeID) {
        console.error('YouTube ID not found!');
        return;
    }

    // Get the video container and the play button
    var videoPlayer = document.getElementById('videoPlayers');
    var playButton = document.querySelector('.play_btns');

    // Hide the play button
    if (playButton) {
        playButton.style.display = 'none';
    }

    // Replace the video element with an iframe
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