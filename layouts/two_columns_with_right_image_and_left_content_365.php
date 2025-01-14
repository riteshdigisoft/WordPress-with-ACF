<?php 
  // Check if the current layout is 'banner_with_heading_and_video'
if (get_row_layout() == 'two_columns_with_right_image_and_left_content_365') : 
	?>  
	<section class="bsky_365 <?php echo get_sub_field("custom_class"); ?>">
		<div class="bsky_365_outter">
			<div class="bsky_overall_wrapper">
				<div class="bsky_365_inner">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="img_side_text">
								<p class="default_caption_caps"><?php echo get_sub_field("sub_title"); ?></p>
								<h2 class="heading_2"><?php echo get_sub_field("title"); ?></h2>
								<h5 class="default_body color_dark_blue"><?php echo get_sub_field("content"); ?></h5>
							<div class="footer_btn">
								<?php if(get_sub_field("phone_button") && get_sub_field("phone_link")){ ?>
							<div class="orange_btn">
							<a href="<?php echo get_sub_field("phone_link"); ?>" class="get_btn"><?php echo get_sub_field("phone_button"); ?></a>
							</div>
							<?php }?>
							<?php if(get_sub_field("button") && get_sub_field("link")){ ?>
							<a href="<?php echo get_sub_field("link"); ?>" class="link_btn">
							<?php echo get_sub_field("button"); ?>
							</a>
							<?php }?>
							</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="bsky_365_img">
								<img src="<?php echo get_sub_field("image"); ?>" alt="" class="bg_img">
								<img src="<?php echo get_sub_field("icon"); ?>" alt="" class="logo_365">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php endif; ?>