<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
  if (get_row_layout() == 'banner_with_heading_and_video') :

    // Get the subfields
    $banner_heading = get_sub_field('banner_heading'); // Banner heading
    $banner_subheading = get_sub_field('banner_subheading'); // Banner subheading
    $button_text = get_sub_field('button_text'); // Button text
    $button_link = get_sub_field('button_link'); // Button link URL
    $contact_no = get_sub_field('contact_no'); // Contact number
   // $banner_image = get_sub_field('banner_image'); // Banner image (if any)
    $video_id = get_sub_field('video_id'); // Video URL (if any)
?>

<section class="bsky_banner">
    <div class="bsky_banner_outter">
        <div class="bsky_overall_wrapper">
            <div class="bsky_banner_inner">
                <?php if ($banner_heading) : ?>
                    <h1 class="common_h1 default_pb"><?php echo esc_html($banner_heading); ?></h1>
                <?php endif; ?>
                  <div class="bsky_banner_text d-block d-md-none">
                        <p class="default_body_large d-block d-md-none"><?php echo $banner_subheading; ?> 
                        </p>
                    </div> 
                <div class="row align-items-lg-center">
                    <div class="col-md-auto">
                        <div class="banner_small_video"> 
							 
							<div class="video-wrapper">
						<video 
							id="videoPlayerhome" 
							src="" 
							poster="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner_video.png" 
							onclick="playVideohome()"
						></video>
						<span 
							class="youtube-links" 
							youtubeids="<?php echo esc_attr($video_id); ?>"
						></span>
						
						<a href="javascript:void(0);" class="video_play" onclick="playVideohome()">
							<img 
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/play.svg" 
								alt="Play Video" 
							/>
						</a>
					</div>

                        </div>    
					
                    </div>
                    <div class="col-md">
                        <div class="bsky_banner_text">
                            <?php if ($banner_subheading) : ?> 
                               <p class="default_body_large d-none d-md-block"><?php echo $banner_subheading; ?></p>
                            <?php endif; ?>
                            <div class="bsky_banner_text_footer">
                                <?php if ($button_text && $button_link) : ?>
                                    <div class="orange_btn">
                                        <a href="<?php echo esc_url($button_link); ?>" class="get_btn"><?php echo esc_html($button_text); ?></a>
                                    </div>
                                <?php endif; ?>

                                <?php if ($contact_no) : ?>
                                    <div class="banner_number">
                                        <a href="tel:<?php echo esc_attr($contact_no); ?>" class="call_link"><?php echo esc_html($contact_no); ?></a>
                                    </div>
                                <?php endif; ?>

                                <!-- Optional happy customer section -->
                                <div class="customer_follow">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/group_img.svg" alt="Happy Customers" />
                                    <p>14k+ happy customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .video-wrapper {
        position: relative;
    }

    .video_play {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        display: block;
        cursor: pointer;
    }

    .video-wrapper.video-playing .video_play {
        display: none;
    }
</style>
<script>
  
    function playVideohome() {
        // Get the YouTube video ID
        var youtubeID = document.querySelector('.youtube-links').getAttribute('youtubeids');
        if (!youtubeID) {
            console.error('YouTube ID not found!');
            return;
        }

        var videoPlayer = document.getElementById('videoPlayerhome');
        var playButton = document.querySelector('.video_play');
        var videoWrapper = document.querySelector('.video-wrapper');

        // Hide the play button
        if (playButton) {
            playButton.style.display = 'none';
        }

        // Optionally, add a 'video-playing' class for additional styling
        if (videoWrapper) {
            videoWrapper.classList.add('video-playing');
        }

        // Get the width and height of the video player before it's replaced
        var videoWidth = videoPlayer.offsetWidth || 560;  // Use a fallback width if offsetWidth is not available
        var videoHeight = videoPlayer.offsetHeight || 315; // Use a fallback height if offsetHeight is not available

        // Create the YouTube iframe
        var iframe = document.createElement('iframe');
        iframe.setAttribute('src', `https://www.youtube.com/embed/${youtubeID}?autoplay=1&controls=0`);
        iframe.setAttribute('width', videoWidth);
        iframe.setAttribute('height', videoHeight);
        iframe.setAttribute('frameborder', '0');
        iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture');
        iframe.setAttribute('allowfullscreen', true);

        // Replace the video element with the iframe
        videoPlayer.parentNode.replaceChild(iframe, videoPlayer);
    } 
	
</script> 
<?php endif; // End check for 'banner_with_heading_and_video' layout ?>


	   