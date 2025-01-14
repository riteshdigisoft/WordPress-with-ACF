<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'left_video_and_right_content') : 
  
      // Get the subfields
	  $video_poster = get_sub_field('video_poster');
	  $video_id = get_sub_field('video_id');
    $right_heading = get_sub_field('right_heading'); // Banner heading
    $right_sub_heading = get_sub_field('right_sub_heading'); // Banner subheading
    $right_content = get_sub_field('right_content'); // Button text      
	$call_button_text = get_sub_field('call_button_text'); // Button text
	$call_button_link = get_sub_field('call_button_link');  
    //$brand_icons = get_sub_field('brand_icons'); 
	$left_image = get_sub_field('left_image');

	?>  
<section class="bsky_zig_zag <?php echo get_sub_field('custom_class'); ?> common_banner"> 
    <div class="bsky_zig_zag_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_zig_zag_inner">
               <div class="row g-0">
                    <div class="col-md-6">
                       <div class="img_side">
					   
						<?php if (!empty($video_poster)): ?>
							<!-- Show video poster if video is added -->
							    <video 
								id="videoPlayer"
								class="img_side_img"
								src="" 
								poster="<?php echo esc_url($video_poster); ?>" 
								onclick="playVideo()"
							></video>

							<span  
								class="youtube-links" 
								youtubeids="<?php echo esc_attr($video_id); ?>"
							></span>

							<a href="javascript:void(0);" class="play_btn" onclick="playVideo()">
								<img 
									src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.svg" 
									alt="Play Video" 
								/>
							</a>
						
							
							
						<?php elseif (!empty($left_image)): ?>
							<!-- Show image if no video is added -->
							<img src="<?php echo esc_url($left_image); ?>" alt="Fallback Image" class="img_side_img">
						<?php else: ?>
							<!-- Optional fallback for no image or video -->
							<p>No media available.</p>
						<?php endif; ?>
					</div> 
                    </div> 
                    <div class="col-md-6">
                        <div class="img_side_text">
                            <p class="default_caption_caps"><?php echo $right_heading; ?></p>
                            <h1 class="heading_1"><?php echo $right_sub_heading; ?></h1>
                            <p class="default_body color_dark_blue"><?php echo $right_content; ?> </p>

                            <div class="footer_btn">
                            	<?php if($call_button_text){ ?>
                                <div class="orange_btn">
                                    <a href="<?php echo $call_button_link; ?>" class="get_btn"> <?php echo $call_button_text; ?></a>
                                </div>
                                <?php }?>
                                <div class="customer_follow">
							<div class="brand_icons">
								<?php if( have_rows('brand_icons') ): ?>
									<?php while( have_rows('brand_icons') ): the_row(); ?>
										<div>
											<img src="<?php the_sub_field('icons'); ?>" alt="" srcset="">
										</div>
									<?php endwhile; ?>
								<?php else: ?>
									<!-- No images available -->
								<?php endif; ?>
							</div>

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
<?php endif ; ?>		